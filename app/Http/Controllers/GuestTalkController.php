<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestTalk;
use Illuminate\Support\Facades\Session;


class GuestTalkController extends Controller
{
    public function guestTalksTrainings(){
        $guestTalks = GuestTalk::all();
        return view('Frontend.guestTalksTrainings')->with('guestTalks',$guestTalks);
    }

    public function guestTalksTrainingsManagement(){
        $guestTalks = GuestTalk::all();
        return view('Frontend.guestTalksTrainingsManagement')->with('guestTalks',$guestTalks);
    }

    public function deleteGuestTalk($id)
    {
        $guestTalk = GuestTalk::find($id);
        $guestTalk->delete();

        Session::flash('status_code','success');
        return redirect('/guestTalksTrainingsManagement')->with('status','successfully deleted!');
    }

    public function addGuestTalk(Request $request)
    {
        $guestTalk = new GuestTalk;
        $guestTalk->eventName = $request->input('eventName');
        $guestTalk->date = $request->input('date');
        $guestTalk->time = $request->input('time');
        $guestTalk->eventLink = $request->input('eventLink');
        $guestTalk->description = $request->input('description');
        $guestTalk->save();
        
        Session::flash('status_code','success');
        return redirect('/guestTalksTrainingsManagement')->with('status','successfully added a new guest talk!');
    }
}
