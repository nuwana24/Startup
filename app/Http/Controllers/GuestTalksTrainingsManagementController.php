<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestTalksTrainingsManagementController extends Controller
{
    public function guestTalksTrainingsManagement(){
        return view('Frontend.guestTalksTrainingsManagement');
    }
}