<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome()
	{
    	//return view('home');
    	return redirect()->action('ChatController@getIndex');
	}
}
