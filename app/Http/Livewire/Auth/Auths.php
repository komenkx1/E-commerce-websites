<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Notifications\Register;
use App\Providers\RouteServiceProvider;
use Bastinald\LaravelBootstrapComponents\Traits\WithModel;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Livewire\Component;
use Lukeraymonddowning\Honey\Traits\WithHoney;

class Auths extends Component
{
    use WithHoney, WithModel;

    public $mode = 'login';
    public function route()
    {

        return Route::get('login')
            ->name('login')
            ->middleware('guest');
    }

    public function render()
    {
       $this->emit('refresh');
        return view('auth.login');
    }

    public function rules()
    {
        if ($this->mode == 'login') {
            return [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ];
        }else{
            return [
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', Rule::unique('users')],
                'password' => ['required', 'confirmed'],
            ];
        }
        
    }

    public function login()
    {

     
        $this->validateModel();

        $throttleKey = Str::lower($this->model()->get('email')) . '|' . request()->ip();
        $credentials = $this->model()->only(['email', 'password'])->toArray();

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $this->addError('email', __('auth.throttle', [
                'seconds' => RateLimiter::availableIn($throttleKey),
            ]));

            return;
        }

        if (!Auth::attempt($credentials, $this->model()->get('remember'))) {
            RateLimiter::hit($throttleKey);

            $this->addError('email', __('auth.failed'));

            return;
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function is_register($mode)
    {
       $this->emit('refresh');

        $this->mode = $mode;
      
    }
    
    public function register()
    {
  
        $this->validateModel();

        $user = User::create($this->model()->except('password_confirmation')->toArray());
        $user->assignRole('buyer');

        Auth::login($user, true);
        // $user->sendEmailVerificationNotification();

        Notification::send($user, new Register($user));

        return redirect()->to(RouteServiceProvider::HOME);
    }

}
