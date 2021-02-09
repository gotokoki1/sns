<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function show()
    {
        return view('auth.timeline'); 
    }

    public function postTweet(Request $request) 
    {

    }
}
