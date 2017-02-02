<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function getIndex()
	{
   	 	return view('chat.index');
	}
    public function getShow()
	{
   	 	return view('chat.show');
	}
	public function getCrear()
	{
    	return view('chat.crear');
	}
	public function getEdit($id)	
	{
    	return view('chat.edit', array('id'=>$id));
	}
	public function getAccount()	
	{
    	return view('user.account');
	}
}
