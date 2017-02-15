<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\Mesage;
use App\User;

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
        return view('home');
    }

    public function getHome(){
        //INICIALITZEM VARIABLES
        $arrayChats = Chat::all();
        $arrayUsers = User::all();
        $arrayMesage = array();
        $chatId="";
        //RETORNEM AL HOME QUE ES EL CHAT
        return view('chat.index',array('arrayChats' => $arrayChats,'arrayMesage' => $arrayMesage,'chatId'=>$chatId,'arrayUsers'=>$arrayUsers));
  
    }
}
