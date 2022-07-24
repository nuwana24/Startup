<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function adminSessionManagement(){
        return view('Frontend.adminSessionManagement');
    }

}
