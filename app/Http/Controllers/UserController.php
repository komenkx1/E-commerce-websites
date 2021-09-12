<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gender = [
            'male',
            'female',
            'custom'
        ];
        return view('profile.profile',compact('gender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $setting)
    {
        // dd($data);
        if ( $request->store_name) {
            Store::where('user_id',Auth::user()->id)->update([
                'name' => $request->store_name
            ]);
        }

        $data = $request->except('store_name');
       if ($request->photo_path) {

        if ($setting->photo_path) {
            Storage::delete('/public/img/' . $setting->photo_path);
        }
        
        $file_namew = 'photo_profile/'.time() .$setting->name.'.' . $request->photo_path->extension();
        $request->photo_path->storeAs('public/img/', $file_namew);
        $data['photo_path'] =  $file_namew;
    }

    // dd($setting);
        $setting->update($data);
        return redirect()->route('profile.setting.index')->with('success','Your Profile Is Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
       User::where('id',$user)->delete();
       return redirect('/')->with('info','Your Account Was Deleted!');

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
