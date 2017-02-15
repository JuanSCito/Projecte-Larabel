@extends('layouts.master')

@section('content')
	<div class="col-lg-12 col-md-12 col-sm-12 chat centered" >
		<div class="col-lg-12 col-md-12 col-sm-12  centered">		
			<h1>MatrixLogic</h1>

		
				<div class="col-lg-3 col-md-4 col-sm-12  centered">	
					<div>
						
						  <img src="{{ url('/images/joker.png') }}" alt="" class="joker center-block">

					</div>	
					<div  >
						  <label for="comment" class="titulo" >Chats: <i class="fa fa-arrow-down" id="boton" aria-hidden="true"  onclick="desplegar('users','boton')" onmouseup="presionar('boton')" onmousedown="despresionar('boton')" ></i>
						  </label>
						  <div class="lista-chats" id="users">
						  	 
						  	 
								<div id="listado">
								@foreach( $arrayChats as $key => $chat )
								<form method="POST" action="{{ url('/chat/store') }}"  >
								{{ csrf_field() }}
									<button type="submit" onmouseup="btn_presion(this)" onmousedown="btn_dePresion(this)" onmouseover="btn_hover(this)" onmouseout="btn_out(this)">

										<span class="align-middle">{{$chat->name}}</span>
										@if($chat->password!=null)
											<i style="float:right;color:#fff176;"class="fa fa-unlock-alt" aria-hidden="true"></i>
										@else
											<i style="float:right;color:#fff176;" class="fa fa-unlock" aria-hidden="true"></i>

										@endif
									</button>
									<input type="hidden" name="chatId" value="{{$chat->id}}">
								</form>
										
									
									@endforeach

								</div>
							
						  </div>

					</div>
					<!--class="form-group"-->
					<div>
						  <label for="comment" class="titulo">Users: <i class="fa fa-arrow-down" id="boton2" aria-hidden="true"  onclick="desplegar('users2','boton2')" onmouseup="presionar('boton2')" onmousedown="despresionar('boton2')" ></i>
						  </label>
						  <div class="lista-chats" id="users2">
						  	<div id="listado2">

							 @foreach( $arrayUsers as $key => $user )
							
								{{ csrf_field() }}
									<button type="submit" onmouseup="btn_presion(this)" onmousedown="btn_dePresion(this)" onmouseover="btn_hover(this)" onmouseout="btn_out(this)">

										<span class="align-middle">{{$user->nick}}</span>
										
									</button>
									<input type="hidden" name="chatId" value="{{$chat->id}}">
							
							 @endforeach

						  </div>
						 </div>
						 
					</div>	
					
				</div>
				<div class="col-lg-9 col-md-8 col-sm-12  centered">
					
						 <div class="form-group">
						  <label for="" class="titulo">Conversacion  
							  @if ($chatId!="")
							  	<span style="color:white;">{{$arrayChats[$chatId-1]->name}}</span>
							  @else

							  @endif
						  </label>
						  <div class="respuesta" id="respuesta" >
						  @if ($chatId=="")
						  
						  	 <p class="no-chat" id="no-chat"><span  class="corchete">[[</span>No Chat Selected <span class="corchete">]]</span></p>
						  	 {{--Para imprimir datos de usuario Auth::user()->email--}}
   						  @else
								@foreach( $arrayMesage as $key => $mesage )
										{{-- quitamos la fecha y dehamos la hora--}}
										<div>[{{substr($mesage->created_at,11)}}:::{{Auth::user()->nick}}]&nbsp;&nbsp;{{$mesage->text}}</div>
								@endforeach
						  

						  @endif
						  
						 </div>

						 <div class="form-group" >
						 
						  
							  

							  <form method="POST" action="{{ url('/chat/store') }}" id="formu">
								{{ csrf_field() }}
								  <div class="col-sm-12 col-lg-10  textarea">
										<textarea class="form-control" name="missatge" rows="2" form="formu"></textarea>
										<input type="hidden" name="chatId" value="{{$chatId}}">
												
								  </div>	
								  <div class="col-sm-12 col-lg-2 textarea-boton">
										<input type="submit" class="btn btn-default chat-boton" value="Entrar">		
								  </div>
							  </form>	
						
						  </div>		
						
					
				</div>
			</div>

<!-- PER IMPLEMENTAR, FINESTRA MODAL PER DEMANAR PASSWORD -->
	<!--
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  Launch demo modal
	</button>
	-->

	<!-- Modal -->
	<!--
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	-->
<!--FINAL IMPLEMENTACIÓ FINESTRA MODAL PER DEMANAR PASSWORD-->

	</div>
	<script>

  
	$( '#listado' ).fadeIn('fast');
	$( '#listado2' ).fadeOut('fast');
	$( '#no-chat' ).fadeIn('slow');
	//CODIGO JQUERY PARA AUTOSCROLL DEL CHAT
	$( document ).ready(function() {
		//alert('hola');
		var alturas = $('#respuesta').prop("scrollHeight");
		//PER MANTENIR L'ESCROLL SEMPRE A LULTIM MISS
		$("#respuesta").scrollTop(alturas);

		

		
});
	
	function desplegar(users,boton){
		

		var user = document.getElementById(users);
		var altura = document.getElementById("respuesta").offsetHeight/2+"px";
		var altura_users = document.getElementById(users).offsetHeight;
		user.style.transition = "height 1s";

		if(altura_users!=0){
			user.style.height= 0;
			if(user.id=="users"){
				$( '#listado' ).fadeOut('fast');
			}else{
				$( '#listado2' ).fadeOut('fast');
			}			
		}else{
			
			if(user.id=="users"){
				document.getElementById('users2').style.height= 0;
				$( '#listado' ).fadeIn('fast');

			}else{
				document.getElementById('users').style.height= 0;
				$( '#listado2' ).fadeIn('fast');
			}

			user.style.height= altura;
			$( '#'+users ).fadeIn();		
		}	
	}

	function presionar(boton){
		var boton = document.getElementById(boton);

		boton.style.transform = "translate(0px,0px)";

		
	
		
	}

	function despresionar(boton){

		var boton = document.getElementById(boton);


	}

	function btn_presion(element) {

		
		//element.style.background = "rgba(55,71,79,0.8)";
		element.style.background = "rgba(55,71,80,0.9)";
		
	}

	function btn_dePresion(element) {

		//element.style.background = "rgba(55,71,80,0.9)";
		element.style.background = "rgba(55,71,79,0.8)";
	}

	function btn_hover(element) {

		element.style.background = "rgba(55,71,80,0.9)";
	}

	function btn_out(element) {
		element.style.background = "rgba(55,71,79,0.8)";
	}





	</script>
	
@stop