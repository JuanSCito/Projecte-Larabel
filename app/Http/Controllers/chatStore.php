<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
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
		function getUser(){
			$arrayUsers = User::all();
			return $arrayUsers;
		}
		
		function getChat(){
			$arrayChats = Chat::all();
			return $arrayChats;
		}
		function getMesage(){
			$arrayMesage = array();
			return $arrayMesage;
		}

		//SEMPRE QUE EXISTEIXI EL CHATID I A MÉS NO ESTIGUI BUID
		//RETORNEM ELS MISSATGES EN FUNCIO DEL CHAT SELECCIONAT
		 function getChatId($chatId){
		 	$arrayMesage = array();
			$Chat = DB::table('mesages')
            ->join('listachat', function ($join)use ($chatId) {
            	$join->on('mesages.id', '=', 'listachat.id_mesage')
                 ->where('id_chat', '=', $chatId);
            })
            ->get();
	        $arrayMesage = $Chat;

	        return $arrayMesage;


		}

		$chatId="";
		$arrayChats= getChat();
		
		
		//OBTENIM SI CHATID ESTA BUIT O NO
		$chatId_buit = $request->input("chatId")!="";

		//ENVIANT MISSATGES AL CHAT..
		//SEMPRE QUE ENVIEM ALGO PER FORMULARI TIPO POST AMB CONTINGUT I VAGI IDENTIFICAT EN UN CHAT EN CONCRET ENTREM
		if($request->isMethod("post") && $request->has("missatge") && $request->input("missatge")!="" && $chatId_buit){
			//RECOLLIM DATA, DADES FORM, Y EL ID DE CHAT
			$data = date('Y-m-d H:i:s');
			
			$missatge=$request->input("missatge");

			$idChat= $request->input("chatId");
			//INSERT GET ID, DESPRES DE FER AQUEST INSERT EN LA VARIABLE $ID TENIM EL ID DEL INSERT 
			$id=DB::table('mesages')->insertGetId(
			    ['text' => $missatge,'created_at'=> $data,'updated_at'=> $data]
			);
			//AHORA ARA INSERTEMA LA LLISTA CHAT, EL ID DE CHAT, ID DE MISSATGE
			$id2= DB::table('listachat')->insertGetId(
			    ['id_mesage' => $id,'id_chat'=> $idChat,'created_at'=> $data,'updated_at'=> $data]
			);
			//ACTUALITZEM EL MISSATGES 
			$arrayMesage = getMesage();
			$arrayUsers = getUser();


			
		}

	

		//CREANT CHAT...
		if($request->has("chat-name")){
			//echo $request->input("chat-name").$request->input("chat-password");

			$data = date('Y-m-d H:i:s');
			$nameChat= $request->input("chat-name");
			//POR IMPLEMENTAR
			$passChat = bcrypt($request->input("chat-password"));
			//EN CAS DE NO ESTAR LA PASS, INSERTEM NULL
			if(!$request->has("chat-password")){
				$passChat = null;
			}
			//$u->password = bcrypt($User['password']);

			$chatId=DB::table('chat')->insertGetId(
			    ['name' => $nameChat,'password' => $passChat,'created_at' => $data,'updated_at'=> $data]
			);

			$idMesage=DB::table('mesages')->insertGetId(
			    ['text' => 'Welcome to ['.$nameChat.']','created_at'=> $data,'updated_at'=> $data]
			);
			DB::table('listachat')->insert(
			    ['id_mesage' => $idMesage,'id_chat'=> $chatId,'created_at'=> $data,'updated_at'=> $data]
			);

			$arrayMesage = getChatId($chatId);
			$arrayChats = getChat();
			$arrayUsers = getUser();

		}

		//SELECCIONANT CHAT..
		//SINO CREEM CHAT NI ESTEM ENVIANT MISSATGES CONSULTEM MISSATGES I USUARIS
		if( $request->has("chatId") && $chatId_buit){

			$chatId =$request->input("chatId");
	        $arrayMesage = getChatId($chatId);
	        $arrayUsers = getUser();

		}
		

    	return  view('chat.index',array('arrayChats' => $arrayChats,'arrayMesage' => $arrayMesage,'chatId'=>$chatId,'arrayUsers'=>$arrayUsers));

	}
}

