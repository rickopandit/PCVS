<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function registerededit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users',$users);
    }
    public function registerupdate(Request $request,$id)
    {
        $users = User::find($id);
        $users->username = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/user-register')->with('status','Updated successfully!');
    }
    public function registerdelete(Request $request,$id)
    {
        $users = User::findOrFail ($id);
        $users->delete();

        return redirect('/user-register')->with('status','Removed successfully!');
    }
}
