<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
       
        return view('beforeAuth.home');
    }

    public function signIn()
    {
        return view('beforeAuth.login');
    }

    public function welcome_about()
    {
        return view('beforeAuth.about');
    }

    public function signup()
    {
        return view('beforeAuth.signup');
    }

    public function welcome_startups()
    {
        return view('beforeAuth.explore');
    }

    public function welcome_mentors()
    {
        return view('beforeAuth.partners');
    }

    public function welcome_guest_talks()
    {
        return view('beforeAuth.guestTalksTrainings');
    }

}
