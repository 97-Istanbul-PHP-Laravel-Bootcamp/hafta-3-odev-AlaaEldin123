<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
class UserController extends Controller
{
    

    // Users table view page

    public function UserView(){
        $users = User::all();
        return view('backend.user.user_view',compact ('users'));
    }

    // return to add new User view page

    public function User_register(){

        return view('backend.user.user_register');
    }


    public function User_Create(Request $request){
       

         User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

         return redirect()->route('user.view');
    }


     // return to Edit User view page
    public function UserEdit($id){
        $users = User::findOrFail($id);
        return view('backend.user.UserEdit',compact('users'));
    }

    public function UserUpdate(Request $request){

        $user_id = $request->id;
         User::findOrFail($user_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

          return redirect()->route('user.view');
    }
    
     // Delete User 
    public function UserDelete($id){
    User::findOrFail($id)->delete();

    return redirect()->route('user.view');
    }
}
