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
        //$arrayPeliculas = Movie::all();
        $arrayChats = Chat::all();
        $arrayMesage = Mesage::all();
        
            // El usuario está correctamente autenticado
            return view('chat.index',array('arrayChats' => $arrayChats,'arrayMesage' => $arrayMesage));

        
    }
}
