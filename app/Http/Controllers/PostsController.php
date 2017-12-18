<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function submit(Request $request) {
    	$this->validate($request,[
    		'post' => 'required'
    	]);
        if (Auth::guard('admin')->check()) {
            $username = Auth::guard('admin')->user()->name;
        } else {
            $username = Auth::user()->name;
        }

    	// Create New Post
    	$post = new Post;
    	$post->username =  $username;
    	$post->post = $request->input('post');
    	// Save Post
    	$post->save();

    	// Redirect

    	return redirect()->back();
    }

}
