<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterStartupController extends Controller
{
    public function registerStartup(){
        return view('Frontend.registerStartup');
    }
}
