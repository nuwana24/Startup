<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartupManagementController extends Controller
{
    public function startupManagement(){
        return view('Frontend.startupManagement');
    }
}
