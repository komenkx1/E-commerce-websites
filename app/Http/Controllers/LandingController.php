<?php

namespace App\Http\Controllers;

use App\Notifications\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class LandingController extends Controller
{
    public function index()
    {
       return view('home');
    }

    public function sendMailVerif()
    {
        // dd(Auth::user());
        Notification::send(Auth::user(), new Register(Auth::user()));
        return redirect('/')->with('success','Email Has Been Sended');
    }

}
