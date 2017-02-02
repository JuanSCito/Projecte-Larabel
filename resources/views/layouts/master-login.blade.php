<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!--Libreria jquery para scroll y el fadein-->
   
   
      
 
  
  </head>

  <body style=margin:0 onload=
"for(Pantalla=window, Ancho=q.width=Pantalla.innerWidth-15, Altura=q.height=Pantalla.innerHeight, Caracteres=Math.random, Columnas=[], i=0; i<256; Columnas[i++]=1 ); setInterval('9Style=\'rgba(0,0,0,.05)\'9Rect(0,0,Ancho,Altura)9Style=\'#0F0\'; Columnas.map(function(v,i){9Text(String.fromCharCode(3e4+Caracteres()*33),i*10,v);  Columnas[i]=v>758+Caracteres()*1e4?0:v+10})'.split(9).join(';q.getContext(\'2d\').fill'),33)">
    @include('partials.navbar')
    
    <canvas id=q>

     
    </canvas>

    <div class="container-fluid">
    
        @yield('content')
     </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }} "></script>
  
    </script>

  </body>
</html>