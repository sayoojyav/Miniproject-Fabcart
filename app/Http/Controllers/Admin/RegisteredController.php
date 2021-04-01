<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisteredController extends Controller
{
	public function index()
	{
		$users=User::where('role_as','Vendor')->get();
		return view('admin.users.index')->with('users',$users);
    }
    public function edit($id)
    {
    	$user_role =User::find($id);
    	return view('admin.users.edit')->with('user_role',$user_role);
    }
    public function update( Request $request, $id)
    {
    	$user=User::find($id);
    	$user->name =$request->name;
    	$user->role_as =$request->roles;
        $user->isban =$request->isban;
    	$user->update();
    	return redirect('registered-user');
    }
}
