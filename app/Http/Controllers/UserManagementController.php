<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function userManagement(){
        return view('Frontend.userManagement');
    }
}