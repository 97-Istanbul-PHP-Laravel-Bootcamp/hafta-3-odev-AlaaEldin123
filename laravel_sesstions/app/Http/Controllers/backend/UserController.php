<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    

    // Users table view page

    public function UserView(){
        $users = User::latest()->get();
        return view('backend.user.user_view','users');
    }

    // return to add new User view page

    public function User_register(){

        return view('backend.user.user_register');
    }


    public function User_Create(Request $request){
         User::insert([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => $request['password'],
            'status' => 'active',
        ]);

         return redirect()->route('user.view');
    }


     // return to Edit User view page
    public function UserEdit($id){

        return view('backend.user.UserEdit');
    }

     // Delete User 
    public function UserDelete(){

    return "User user deleted succusfuly";
    }
}
