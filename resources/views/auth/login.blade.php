@extends('layouts.master-login')

@section('content')
	

   
	<div class="col-lg-12 col-sm-12 formulario">
		<div class="col-lg-6 col-sm-12  col-lg-offset-3  centered">		
			<h1>MatrixLogic</h1>
			<div class="panel panel-default">
				<form action="">
					<div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control " id="email">
				    </div>
					<div class="form-group">
		    			<label for="pwd">Password:</label>
		    			<input type="password" class="form-control" id="pwd">
		  			</div>
		  			<div class="row">
		  				<div class="col-sm-12 col-lg-6">
			  			<input type="submit" class="btn btn-default" value="Entrar">
			  			
			  			</div>
			  			<div class="col-sm-12 col-lg-6">
			  			<input type="submit" class="btn btn-default" value="Register">
			  			
			  			</div>
		  			</div>
				</form>
			</div>
		</div>
	</div>
	<script>

//FUNCION PARA CADA VEZ QUE SE REDIMENSIONE LA PAGINA SE ACTUALIZE LA ALTURA DEL CANVAS
function Resize()
{

//RECOLLIM EL CANVAS
 var canvas = document.getElementById("q");
 	//ACTULIZEM ALTURA Y LONGITUD
 	q.height = window.innerHeight;
	q.width = window.innerWidth-15;
	//ACTULIZEM EL FONS
	q.getContext('2d').fillStyle = 'rgba(0,0,0,0.05)';
}
//CADA COP QUE ES FAGI UN RESIZE..
window.onresize=Resize;
</script>

@stop