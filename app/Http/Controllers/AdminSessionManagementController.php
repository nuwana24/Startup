<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSessionManagementController extends Controller
{
    public function adminSessionManagement(){
        return view('Frontend.adminSessionManagement');
    }
}
