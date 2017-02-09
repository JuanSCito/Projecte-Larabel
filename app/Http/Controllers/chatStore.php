<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\Mesage;
Use App\Listachat;
use DB;

class chatStore extends Controller
{
    //


    public function store(Request $request)	
	{	
		
		$arrayChats = Chat::all();
		$arrayMesage = array();
		$chatId="";
		$name ="";
		
		

		if($request->isMethod("post") && $request->has("nombre") && $request->input("nombre")!="" && $request->input("chatId")!=""){
			//echo 'HOLAAAAAAAAAAA';
			$data = date('Y-m-d H:i:s');
			$name =$request->input("nombre");
			$idChat= $request->input("chatId");
			//INSERT GET ID DUVUELVE EL ID DEL INSERT REALIDZADO
			$id=DB::table('mesages')->insertGetId(
			    ['text' => $name,'created_at'=> $data,'updated_at'=> $data]
			);
			//echo 'id'.$id.'data'. $data.'idchat'. $idChat;
			//AHORA INSERTAMOS EN LA LISTA CHAT USANDO EL ID DE CHAT Y EL ID DEL MENSAJE
			$id2= DB::table('listachat')->insertGetId(
			    ['id_mesage' => $id,'id_chat'=> $idChat,'created_at'=> $data,'updated_at'=> $data]
			);
			//echo 'id2'.$id2;
			$arrayMesage = Mesage::all();
			
		}else{
			//echo 'HOLAAAAAAAAAAA';
			//return redirect('/chat');

			
			//echo 'adiossssssssssssss';
			
			//$chatId="";



		}

		

		if($request->isMethod("post") && $request->has("chatId")){

			$chatId =$request->input("chatId");
			//DEVOLVEMOS LOS MENSAJES QUE COINCIDEN EL ID DE CHAT EN EL QUE ESTAMOS HABLANDO
			$Chat = DB::table('mesages')
            ->join('listachat', function ($join)use ($chatId) {
            	$join->on('mesages.id', '=', 'listachat.id_mesage')
                 ->where('id_chat', '=', $chatId);
            })
            ->get();

            

			
	        $arrayMesage = $Chat;

		}else{

			//$arrayMesage= "";
			//$arrayMesage= array();
			
		}

		
		//$name = $request->input('nombre');
		//alert($name);


    	return  view('chat.index',array('name'=>$name,'arrayChats' => $arrayChats,'arrayMesage' => $arrayMesage,'chatId'=>$chatId));//view('chat.index',array('name' => $name));

	}
}

