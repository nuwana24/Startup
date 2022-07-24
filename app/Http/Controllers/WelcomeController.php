<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestTalk;
use App\Models\User;
use App\Models\Startup;

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
        $startups = Startup::all();
        return view('beforeAuth.explore')->with('startups',$startups);;
    }

    public function welcome_mentors()
    {
        $mentors = User::Where('roleName','=','Mentor')->get();
        return view('beforeAuth.partners')->with('mentors',$mentors);;
    }

    public function welcome_guest_talks()
    {
        $guestTalks = GuestTalk::all();
        return view('beforeAuth.guestTalksTrainings')->with('guestTalks',$guestTalks);
    }

}
