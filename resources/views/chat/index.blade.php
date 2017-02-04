@extends('layouts.master')

@section('content')
	<div class="col-lg-12 col-md-12 col-sm-12 chat centered" >
		<div class="col-lg-12 col-md-12 col-sm-12  centered">		
			<h1>MatrixLogic</h1>
				<div class="col-lg-3 col-md-4 col-sm-12  centered">	
					<div>
						
						  <img src="{{ url('/images/joker.png') }}" alt="">

					</div>	
					<div  >
						  <label for="comment" class="titulo" >Chats: <i class="fa fa-arrow-down" id="boton" aria-hidden="true"  onclick="desplegar('users','boton')" onmouseup="presionar('boton')" onmousedown="despresionar('boton')" ></i>
						  </label>
						  <div class="lista-chats" id="users"></div>

					</div>
					<!--class="form-group"-->
					<div  >
						  <label for="comment" class="titulo">Users: <i class="fa fa-arrow-down" id="boton2" aria-hidden="true"  onclick="desplegar('users2','boton2')" onmouseup="presionar('boton2')" onmousedown="despresionar('boton2')" ></i>
						  </label>
						  <div class="lista-chats" id="users2"></div>
					</div>	
					
				</div>
				<div class="col-lg-9 col-md-8 col-sm-12   centered">
					<form action="">
						 <div class="form-group">
						  <label for="" class="titulo">Conversacion:</label>
						  <div class="respuesta" id="respuesta" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
						  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat provident cum laborum alias dolorum praesentium officia impedit voluptatibus neque, quo error voluptas, sequi vero ipsa distinctio eos qui natus accusantium!<br>
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

  
	
	function desplegar(users,boton){
		
		//alert(users);
		var user = document.getElementById(users);

		 var altura = document.getElementById("respuesta").offsetHeight/2+"px";
		 //user.style.transition = 'all 1s';
		 altura_users = document.getElementById(users).offsetHeight;
		//alert(altura_users);
		
		user.style.transition = "height 1s";
		if(altura_users!=0){
			user.style.height= 0;

					
		}else{
			
			if(user.id=="users"){
				document.getElementById('users2').style.height= 0;
			}else{
				document.getElementById('users').style.height= 0;

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