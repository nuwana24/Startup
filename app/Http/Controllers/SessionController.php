<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MeetingRequest;
use App\Models\MeetingSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function adminSessionManagement(){

        $requests = MeetingRequest::Where('status','=','pending by admin')->get();
        return view('Frontend.adminSessionManagement')->with('requests',$requests);
    }

    public function requestMeeting($mentorId)
    {
        $request = new MeetingRequest;
        $request->requested_user_id = Auth::user()->id;
        $request->mentor_id = $mentorId;
        $request->status = "pending by admin";

        $request->save();
       
        Session::flash('status_code','success');
        return redirect('/mentors')->with('status','Request Sent !');

    }

    public function forwardRequestToMentor($id)
    {
        $request = MeetingRequest::find($id);
        $request->status = 'pending by mentor';
        $request->save();
        
        Session::flash('status_code','success');
        return redirect('/adminSessionManagement')->with('status','Forwaded to Mentor !');
    }

    public function rejectRequestByAdmin($id)
    {
        $request = MeetingRequest::find($id);
        $request->status = 'rejected by admin';
        $request->save();
        
        Session::flash('status_code','error');
        return redirect('/adminSessionManagement')->with('status','Rejected the Meeting Request');
    }

    public function rejectRequestByMentor($id)
    {
        $request = MeetingRequest::find($id);
        $request->status = 'rejected by mentor';
        $request->save();

        Session::flash('status_code','error');
        return redirect('/getMeetingRequestsOfMentor')->with('status','Rejected the Meeting Request');
    }

    public function getMeetingRequestsOfMentor()
    {
        $requests = MeetingRequest::Where('mentor_id','=',Auth::user()->id)->Where('status','=','pending by mentor')->get();
        return view('Frontend.mentorRequestList')->with('requests',$requests);
    }

    public function getApproveRequestPage($id)
    {
        $request = MeetingRequest::find($id);
        return view('Frontend.mentorSessionTest')->with('request',$request);
    }

    public function approveRequest(Request $request)
    {
        $meeting_session = new MeetingSession;
        $meeting_session->request_id = $request->input('request_id');
        $meeting_session->date = $request->input('date');
        $meeting_session->time = $request->input('time');
        $meeting_session->sessionLink = $request->input('sessionLink');

        $meeting_session->save();

        $meeting_request = MeetingRequest::find($request->input('request_id'));
        $meeting_request->status = 'approved';
        $meeting_request->session_id = $meeting_session->id;
        $meeting_request->save();

        Session::flash('status_code','success');
        return redirect('/getMeetingRequestsOfMentor')->with('status','Approved the Meeting Request!');

    }

}
