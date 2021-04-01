<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class UserController extends Controller
{
    public function myprofile(){
    	
    	return view('admin.profile');
    }
    public function profileupdate(Request $request){
    	$id =Auth::user()->id;
    	$user =User::findOrFail($id);
    	$user->lname =$request->lname;
    	$user->address1 =$request->address1;
    	$user->address2 =$request->address2;
    	$user->city =$request->city;
    	$user->state =$request->state;
    	$user->pincode =$request->pincode;
    	$user->phone =$request->phone;
    	$user->alternate_phone =$request->alternate_phone;
    	if($request->hasfile('image'))
    	{
    		$destination = 'uploads/profile/'.$user->image;
    		if(File::exists($destination)){
    			File::delete($destination);
    		}
    		$file =$request->file('image');
    		$extension =$file->getClientOriginalExtension();
    		$filename =time() . '.' . $extension;

    		$file->move('uploads/profile/',$filename);
    		$user->image =$filename;
    	}
    	$user->update();
    	//return "hiii";
    	return redirect()->back()->with('status','profile updated');
    }
}
