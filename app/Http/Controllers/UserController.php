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

class UserController extends Controller
{
    public function profile(){
        $user = User::find(Auth::user()->id);
        return view('Frontend.profile')->with('user',$user);
    }

    public function editprofile(){
        $user = User::find(Auth::user()->id);
        return view('Frontend.profileEdit')->with('user',$user);
    }

    public function userManagement(){
        return view('Frontend.userManagement');
    }

    public function register(Request $request)
    {
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

        if ($request->file('image')){
            return $request->file('image');
            $item->profilePicturePath = $request->file('profilePicturePath')->getClientOriginalName();
            $image = $request->file('profilePicturePath');
            $name = $image->getClientOriginalName();
            $image->move('img', $name);
        }    
        

       $user->save();
       $user->assignRole($request['roleName']);

       return redirect('/signIn');
        
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

        $user->update();
        return redirect('/profile');
    }

}
