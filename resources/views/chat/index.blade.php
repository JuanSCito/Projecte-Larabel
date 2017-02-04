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
									<p>{{$chat->name}}</p>
									@endforeach

								</div>
						  </div>

					</div>
					<!--class="form-group"-->
					<div  >
						  <label for="comment" class="titulo">Users: <i class="fa fa-arrow-down" id="boton2" aria-hidden="true"  onclick="desplegar('users2','boton2')" onmouseup="presionar('boton2')" onmousedown="despresionar('boton2')" ></i>
						  </label>
						  <div class="lista-chats" id="users2"></div>
					</div>	
					
				</div>
				<div class="col-lg-9 col-md-8 col-sm-12  centered">
					<form action="">
						 <div class="form-group">
						  <label for="" class="titulo">Conversacion:</label>
						  <div class="respuesta" id="respuesta" >
							@foreach( $arrayMesage as $key => $mesage )
									<p>{{$mesage->text}}</p>
							@endforeach
						  
						 </div>

						 <div class="form-group">
							  <label for="comment"></label>

							  
							  <div class="col-sm-12 col-lg-10  textarea">
									<textarea class="form-control" rows="2" id=""></textarea>		
							  </div>	
							  <div class="col-sm-12 col-lg-2 textarea-boton">
									<input type="submit" class="btn btn-default chat-boton" value="Entrar">		
							  </div>	

						  </div>		
						
					</form>
				</div>
			</div>
	</div>
	<script>

  
	$( '#listado' ).fadeOut('fast');
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

			}			
		}else{
			
			if(user.id=="users"){
				document.getElementById('users2').style.height= 0;
				$( '#listado' ).fadeIn('fast');

			}else{
				document.getElementById('users').style.height= 0;
				$( '#listado' ).fadeOut('fast');
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



	</script>
	
@stop