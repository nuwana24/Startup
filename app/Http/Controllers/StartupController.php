<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Startup;
use Illuminate\Support\Facades\Auth;

class StartupController extends Controller
{
    public function startups()
    {
        $startups = Startup::all();
        return view('Frontend.explore')->with('startups',$startups);
    }

    public function mystartups(){
        $startups = Startup::Where('created_user_id','=',Auth::user()->id)->get();
        return view('Frontend.profileMyStartups')->with('startups',$startups);
    }

    public function startupedit($id){
        $startup = Startup::find($id);
        return view('Frontend.profileStartupEdit')->with('startup',$startup);
    }

    public function registerStartup(){
        return view('Frontend.registerStartup');
    }

    public function startupManagement(){
        $startups = Startup::all();
        return view('Frontend.startupManagement')->with('startups',$startups);
    }

    public function createStartup(Request $request){

        $startup = new Startup;
        $startup->created_user_id = Auth::user()->id;
        $startup->startupName = $request->input('startupName');
        $startup->webUrl = $request->input('webUrl');
        $startup->tagline = $request->input('tagline');
        $startup->telephone = $request->input('telephone');
        $startup->companyName = $request->input('companyName');
        $startup->businessRegistrationNumber = $request->input('businessRegistrationNumber');
        $startup->foundedDate = $request->input('foundedDate');
        $startup->startupCategory = $request->input('startupCategory');
        $startup->description = $request->input('description');
        $startup->numberOfEmployees = $request->input('numberOfEmployees');
        $startup->founderName = $request->input('founderName');
        $startup->founderEmail = $request->input('founderEmail');
        $startup->founderTelephone = $request->input('founderTelephone');
        
        $startup->save();
        return redirect('/mystartups');
    }

    public function updateStartup(Request $request)
    {
        $startup = Startup::find($request->input('startup_id'));

        $startup->created_user_id = Auth::user()->id;
        $startup->startupName = $request->input('startupName');
        $startup->webUrl = $request->input('webUrl');
        $startup->tagline = $request->input('tagline');
        $startup->telephone = $request->input('telephone');
        $startup->companyName = $request->input('companyName');
        $startup->businessRegistrationNumber = $request->input('businessRegistrationNumber');
        $startup->foundedDate = $request->input('foundedDate');
        $startup->startupCategory = $request->input('startupCategory');
        $startup->description = $request->input('description');
        $startup->numberOfEmployees = $request->input('numberOfEmployees');
        $startup->founderName = $request->input('founderName');
        $startup->founderEmail = $request->input('founderEmail');
        $startup->founderTelephone = $request->input('founderTelephone');

        $startup->update();
        return redirect('/mystartups');
    }

    public function deleteStartup($id)
    {
        $startup = Startup::find($id);
        $startup->delete();
        return redirect('/startupManagement');
    }
}
