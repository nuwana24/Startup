<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestTalkController extends Controller
{
    public function guestTalksTrainings(){
        return view('Frontend.guestTalksTrainings');
    }

    public function guestTalksTrainingsManagement(){
        return view('Frontend.guestTalksTrainingsManagement');
    }
}
