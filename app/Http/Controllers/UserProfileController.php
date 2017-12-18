<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Profile ;
use Auth;

class PostsController extends Controller
{
    public function submit(Request $request) {
    	$this->validate($request,[
    		
    	]);
        
        $username = Auth::user()->name;
        

    	$user_profile = new User_Profile;
    	$user_profile->username =  $username;
    	$user_profile->bio = $request->input('bio');
    	// Save Post
    	$user_profile->save();

    	// Redirect

    	return redirect()->back();
    }
    public function getIndex() {
    	return 123;
    }
}