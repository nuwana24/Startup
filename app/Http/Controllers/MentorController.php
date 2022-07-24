<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MentorController extends Controller
{
    public function mentors(){

        $mentors = User::Where('roleName','=','Mentor')->get();
        return view('Frontend.partners')->with('mentors',$mentors);
    }
}
