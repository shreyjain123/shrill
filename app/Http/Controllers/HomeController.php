<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\UserProfile;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dash');
    }
    public function show_user_profile()
    {
        return view('user_profile');
    }
    public function getPosts(){

        $post = Post::all();

        $user_profile = UserProfile::all();

        return view('dash')->with("post", $post)->with("user_profile", $user_profile);
    }
}