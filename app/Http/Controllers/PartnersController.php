<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function partners(){
        return view('Frontend.partners');
    }
}
