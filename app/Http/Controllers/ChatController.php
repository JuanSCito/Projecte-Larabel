<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\Mesage;


class ChatController extends Controller
{
    //
    public function getIndex()
	{
		$arrayChats = Chat::all();
		$arrayMesage = Mesage::all();
		$name = " ";
   	 	return view('chat.index',array('arrayChats' => $arrayChats,'arrayMesage' => $arrayMesage,'name'=>$name));
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
