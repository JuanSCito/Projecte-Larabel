<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\Mesage;
use DB;

class chatStore extends Controller
{
    //


    public function store(Request $request)	
	{	
		
		if($request->isMethod("post") && $request->has("nombre")){
			$data = date('Y-m-d H:i:s');
			$name =$request->input("nombre");
			DB::table('mesages')->insert(
			    ['text' => $name,'created_at'=> $data,'updated_at'=> $data]
			);
			$arrayChats = Chat::all();
			$arrayMesage = Mesage::all();
		}else{
			$name ="paco";
		}
		//$name = $request->input('nombre');
		//alert($name);


    	return  view('chat.index',array('name'=>$name,'arrayChats' => $arrayChats,'arrayMesage' => $arrayMesage));//view('chat.index',array('name' => $name));

	}
}

