<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Matrixlogic</title>



    <!-- Bootstrap -->
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ url('/fonts/font-awesome/css/font-awesome.min.css') }} ">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style>
   
    </style>

   
  </head>
  <body>
    @include('partials.navbar')
    


    <div class="container">
        @yield('content')
     </div>
     


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }} "></script>
  
    </script>
    <script>
      
        $(document).ready(function() {
            
          $("#respuesta").fadeIn("slow");
       
          $("#crear-chat").fadeIn("slow");


    var Tconversa = document.getElementById("respuesta").offsetHeight/2.6+"px";
    var Lconversa = document.getElementById("respuesta").offsetWidth/6+"px";
    //alert(Tconversa);
    var noChat = document.getElementById("no-chat");
    noChat.style.top = Tconversa;
    noChat.style.marginLeft = Lconversa;

    
   
      });
    </script>

  </body>
</html>