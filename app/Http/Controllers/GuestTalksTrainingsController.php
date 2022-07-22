<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestTalksTrainingsController extends Controller
{
    public function guestTalksTrainings(){
        return view('Frontend.guestTalksTrainings');
    }
}
