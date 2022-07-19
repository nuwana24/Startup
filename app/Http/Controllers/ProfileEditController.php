<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileEditController extends Controller
{
    public function editprofile(){
        return view('Frontend.profileEdit');
    }
}

