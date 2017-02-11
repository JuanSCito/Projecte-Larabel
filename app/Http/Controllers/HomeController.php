<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\Mesage;

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
        $arrayMesage = array();
        $name = "";
        $chatId="";
        //RETORNEM AL HOME QUE ES EL CHAT
        return view('chat.index',array('arrayChats' => $arrayChats,'arrayMesage' => $arrayMesage,'name'=>$name,'chatId'=>$chatId));
  
    }
}
