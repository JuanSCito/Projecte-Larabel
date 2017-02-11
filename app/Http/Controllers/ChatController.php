<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\Mesage;
use App\User;




class ChatController extends Controller
{
    
    public function getIndex()
	{
		//INICIATLITZEM VARIABLES
		$arrayChats = Chat::all();
		$arrayMesage = array();
		$name = "";
		$chatId="";
		//ENVIEM VARIABLES AL CHAT
   	 	return view('chat.index',array('arrayChats' => $arrayChats,'arrayMesage' => $arrayMesage,'name'=>$name,'chatId'=>$chatId));
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
