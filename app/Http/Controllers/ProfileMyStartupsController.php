<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileMyStartupsController extends Controller
{
    public function profileMyStartups(){
        return view('Frontend.profileMyStartups');
    }
}
