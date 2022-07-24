<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use App\Models\MeetingRequest;
use App\Models\MeetingSession;
use App\Models\Startup;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function profile(){
        $user = User::find(Auth::user()->id);
        $requests = MeetingRequest::where('requested_user_id','=',Auth::user()->id)->get();
        $mentorRequests = MeetingRequest::where('mentor_id','=',Auth::user()->id)->where('status','=','approved')->get();
        return view('Frontend.profile')->with('user',$user)->with('requests',$requests)->with('mentorRequests',$mentorRequests);
    }

    public function editprofile(){
        $user = User::find(Auth::user()->id);
        return view('Frontend.profileEdit')->with('user',$user);
    }

    public function userManagement(){
        $users = User::all();
        return view('Frontend.userManagement')->with('users',$users);
    }

    public function signupApplication(Request $request)
    {
        $existingUserCount = User::Where('email','=',$request['email'])->count();
        if($existingUserCount > 0)
        {
            Session::flash('status_code','error');
            return redirect('/signup')->with('status','Enterd email is already exisiting');
        }
        $user = new User();
        $user->name = $request['firstName'];
        $user->email = $request['email'];
        $user->password =  Hash::make($request['password']);
        $user->firstName = $request['firstName'];
        $user->lastName = $request['lastName'];
        $user->telePhoneNumber = $request['telePhoneNumber'];
        $user->linkedInUrl = $request['linkedInUrl'];
        $user->college = $request['college'];
        $user->roleName = $request['roleName'];
        $user->mentorCategory = $request['mentorCategory'];

        if ($request->file('profilePicturePath')){
            $user->profilePicturePath = $request->file('profilePicturePath')->getClientOriginalName();
            $image = $request->file('profilePicturePath');
            $name = $image->getClientOriginalName();
            $image->move('img', $name);
        }    

       $user->save();
       $user->assignRole($request['roleName']);

       Session::flash('status_code','success');
       return redirect('/signIn')->with('status','successfully registered!');
        
    }

    //this is for developer usage
    public function createRole()
    {
        Role::create(['name' => 'Mentor']);
        return "success";
    }

    public function updateUser(Request $request)
    {
        $user = User::find($request['user_id']);

        $user->name = $request['firstName'];
        $user->email = $request['email'];
        $user->firstName = $request['firstName'];
        $user->lastName = $request['lastName'];
        $user->telePhoneNumber = $request['telePhoneNumber'];
        $user->linkedInUrl = $request['linkedInUrl'];
        $user->college = $request['college'];

        if ($request->file('profilePicturePath')){
            $user->profilePicturePath = $request->file('profilePicturePath')->getClientOriginalName();
            $image = $request->file('profilePicturePath');
            $name = $image->getClientOriginalName();
            $image->move('img', $name);
        }    

        $user->update();

        Session::flash('status_code','success');
        return redirect('/profile')->with('status','successfully updated your profile!');
    }

    public function deleteUser($id)
    {

        $user = User::find($id); 
        if($user->roleName == 'Admin')
        {
            Session::flash('status_code','error');
            return redirect ('/userManagement')->with('status','Sorry! You can not delete admin user!');
        }
        
        $startups = Startup::Where('created_user_id','=',$user->id)->get();
        foreach($startups as $startup)
        {
            $startup->delete();
        }

        $requests = MeetingRequest::Where('requested_user_id','=',$user->id)->get();
        foreach($requests as $request)
        {
            $sessions = MeetingSession::where('request_id','=',$request->id)->get(); 
            foreach($sessions as $session)
            {
                $session->delete();
            }

            $request->delete();
        }

        $requests = MeetingRequest::Where('mentor_id','=',$user->id)->get();
        foreach($requests as $request)
        {
            $sessions = MeetingSession::where('request_id','=',$request->id)->get(); 
            foreach($sessions as $session)
            {
                $session->delete();
            }

            $request->delete();
        }

        $user->delete();

        Session::flash('status_code','success');
        return redirect ('/userManagement')->with('status','Successfully deleted!');
    }
    
    public function AdminRegistration()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'Admin@gmail.com';
        $user->password =  Hash::make('12345678');
        $user->firstName = 'Admin';
        $user->lastName = 'Admin';
        $user->telePhoneNumber = '0112333222';
        $user->roleName = 'Admin'; 
        $user->save();
        $user->assignRole('Admin');

        Session::flash('status_code','success');
        return redirect ('/signIn')->with('status','Admin Registered!');
    }

}
