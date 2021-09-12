<?php

use App\Http\Controllers\Dashboard\DiscountController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index'])->name('home');


Route::group([
    'middleware' => ['auth'],
    'prefix' => 'profile',
    'as' => 'profile.'
], function () {

    Route::resource('setting', UserController::class)->only('index', 'update','destroy');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::resource('store', StoreController::class)->except('create','show','edit','destroy')->middleware(['mailVerified']);
    Route::get('/register-store', [StoreController::class, 'create'])->middleware('mailVerified')->name('store.create');
});

//dashboard admin
Route::group([
    'middleware' => ['auth','mailVerified', 'role:super|seller'],
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
], function () {
    Route::get('dashboard', function ($id) {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::resource('product', ProductController::class)->except('destroy', 'show');
    Route::resource('category', ProductController::class)->only('store', 'index');
    Route::resource('courier', ProductController::class)->except('destroy', 'show');
    Route::resource('discount', ProductController::class)->except('destroy', 'show', 'create');

    //custom url create discount
    Route::get('/discount/create/{id}', [DiscountController::class, 'create'])->name('discount.create');
});



//manual verify
Route::get('verify/{id}', function ($id) {
    User::where('id', Crypt::decrypt($id))->update([
        'email_verified_at' => now(),
    ]);
    return redirect('/');
})->name('verif');

Route::get('/sendVerif', [LandingController::class, 'sendMailVerif'])->name('sendVerif');
