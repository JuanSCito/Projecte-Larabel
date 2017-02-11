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
		//INICIALITZEM VAIRABLES
		$arrayChats = Chat::all();
		$arrayMesage = array();
		$chatId="";
		$name ="";
		
		//OBTENIM SI CHATID ESTA BUIT O NO
		$chatId_buit = $request->input("chatId")!="";

		//SEMPRE QUE ENVIEM ALGO PER FORMULARI TIPO POST AMB CONTINGUT I VAIG IDENTIFICAT EN UN CHAT EN CONCRET ENTREM
		if($request->isMethod("post") && $request->has("nombre") && $request->input("nombre")!="" && $chatId_buit){
			//RECOLLIM DATA, DADES FORM, Y EL ID DE CHAT
			$data = date('Y-m-d H:i:s');
			$name =$request->input("nombre");
			$idChat= $request->input("chatId");
			//INSERT GET ID, DESPRES DE FER AQUEST INSERT EN LA VARIABLE $ID TENIM EL ID DEL INSERT 
			$id=DB::table('mesages')->insertGetId(
			    ['text' => $name,'created_at'=> $data,'updated_at'=> $data]
			);
			//AHORA ARA INSERTEMA LA LLISTA CHAT, EL ID DE CHAT, ID DE MISSATGE
			$id2= DB::table('listachat')->insertGetId(
			    ['id_mesage' => $id,'id_chat'=> $idChat,'created_at'=> $data,'updated_at'=> $data]
			);
			//ACTUALITZEM EL MISSATGES 
			$arrayMesage = Mesage::all();


			
		}

		//SEMPRE QUE EXISTEIXI EL CHATID I A MÉS NO ESTIGUI BUID
		if( $request->has("chatId") && $chatId_buit){

			$chatId =$request->input("chatId");
			//FEM UN JOIN PER OBTENIR MISSATGES AMB LE MATEIX CHAT ID I ID DE CHAT
			$Chat = DB::table('mesages')
            ->join('listachat', function ($join)use ($chatId) {
            	$join->on('mesages.id', '=', 'listachat.id_mesage')
                 ->where('id_chat', '=', $chatId);
            })
            ->get();
	        $arrayMesage = $Chat;

		}

    	return  view('chat.index',array('name'=>$name,'arrayChats' => $arrayChats,'arrayMesage' => $arrayMesage,'chatId'=>$chatId));

	}
}

