
  <style>


      /*ESTILOS MASTER BLADE*/
      @font-face {
        font-family: matrix;
        src: url('/fonts/matrix.ttf');
      }
      /*ESTILOS NAVEGADOR*/
      .navbar.navbar-inverse {
          margin-bottom:0;
      }
      /*FINAL ESTILOS NAVEGADOR*/

      /*EFECTO MATRIX PARA QUE QUEDE DEBAJO DEL LOGIN*/
      #q {
        z-index: -1000;
        position: absolute;
      }
      /*FINAL EFECTO MATRIX*/
      
      
      /*ESTILOS login*/
      label {
        font-family: matrix;
        font-size: 30px;
      }
      .panel.panel-default {
          background: rgba(0,0,0,0.5);
          border-color: #0F0;
      }
      .container.login {
          margin-top: 50px;
      }
      .login .panel-heading {
        background: rgba(55,71,79,0.8);
        color: white;
        font-family: matrix;
        font-size: 35px;
        letter-spacing: 0.4em;
        border-color: #0F0;
        margin-bottom: 25px;
      }
      .login .btn.btn-link{
        font-family: 'Times new roman';
        font-size: 20px;
        color: white;
        text-align: center;
      }
      .login .btn.btn-primary {
        background:  rgba(55,71,79,0.8); 
        border-color: #0F0;
        width: 100%;
      }
      .login .form-group{
        text-align: center;
      }

      /*FINAL ESTILO LOGIN*/

      .container-fluid {
        top: 50px;
        z-index: 1000;
        background: transparent;
        margin:0;
        padding-left:0;
     
      
      }

      .login label {
        color: #0F0;
      }
      /*FINAL ESTILOS MASTER BLADE*/

      /*ESTILOS HOME BLADE*/
      .formulario h1 {
        text-align: center;
        font-size: 60px;
        letter-spacing: 0.6em;
        overflow-wrap:break-word;
      }

      .formulario {
        margin-top: 8%;
        background: rgba(0,0,0,0.5);
        padding:50px;
        padding-top: 20px;
        color: #0F0;
        font-family: matrix;

      }
      .formulario .panel.panel-default{
        background: transparent;
        padding: 20px;
        border: 1px solid #0F0;
      }

      .formulario input{
        width: 100%;
        font-family: Tahoma;
      }
      .formulario label {
        font-size: 25px;
        font-weight: normal;
      }
      .formulario .btn.btn-default {
        background: transparent;
        color: white;
        font-family: Tahoma;
      }
      .formulario .btn.btn-default:first-child {

        margin-bottom: 10px;
       
      }

      * {
        /*color: #0F0;*/
      }


      /*FINAL ESTILOS HOME BLADE*/
       /*ESTILOS HOME BLADE*/

       body  {
        background-image: url('/images/fondo-chat.png');
       }
      .chat h1 {
        text-align: center;
        font-size: 60px;
        font-weight: thin;
        letter-spacing: 0.6em;
        overflow-wrap:break-word;
      }

      .chat {
        margin-top: 1%;
        background: rgba(0,0,0,0.5);
        padding:50px;
        padding-top: 5px;
        color: #0F0;
        font-family: matrix;

      }
      .chat .panel.panel-default{
        background: transparent;
        padding: 20px;
        border: 1px solid #0F0;
      }

      .chat input{
        width: 100%;
        font-family: Tahoma;
      }
      .chat label {
        font-size: 25px;
        font-weight: normal;
      }
      .chat .btn.btn-default {
        background: transparent;
        color: white;
        font-family: Tahoma;
      }
      .chat .btn.btn-default:first-child {

        margin-bottom: 10px;
       
      }
      .lista-chats {
        
        background: rgba(0,255,0,0.2);
        transition: height 1s;
        position: relative;
        overflow-y: auto;
        font-family: 'Times new roman';
        font-size: 18px;
        color: white;

       
        display: block;

      }
      .lista-chats button{
        padding: 5px;
        margin: 0;
        padding-left: 10px;
        width: 100%;
        text-align: left;
        background: rgba(55,71,79,0.8);
        border: 0;
        border-bottom: 1px solid black;
      }

      .lista-chats button:hover{
       /* background: rgba(55,71,80,0.9);*/
      }
       
       .lista-chats-view  {
          display: none;
         
       }
      
      .chat .respuesta {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 17px;
         height: 430px;
         background: rgba(0,255,0,0.2);
         overflow-y: scroll;
         display: none;
         margin-bottom: 10px;
         color: #90a4ae;
         font-weight: normal;

         

      }
      .respuesta div {
        
        padding: 5px;
        width: auto;
        margin-bottom: 10px;
      }
      
     

        .chat-boton {
          padding: 22px;
          margin-left: 10px;

       }

        .textarea {

         padding-left:0;
         margin-bottom: 10px;
         font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        

       }
       .textarea textarea {
         font-size: 17px;
       }

       .textarea-boton {

          padding-left:0;
       }

       .fa.fa-arrow-down {
       
          color:#0F0;
          font-size: 20px;
          text-align: right;
          padding: 5px;
          background: rgba(0,255,0,0.2);
          cursor: pointer;
          box-shadow: 1px 1px 5px #888;
          margin-left: 54%;
          


       }
       .fa.fa-arrow-down:hover {
       
         /* border: 0.5px solid #0F0;*/
         background: rgba(0,255,255,0.2);

       }
      .titulo {
         background: rgba(55,71,79,0.8);
         width: 100%;
         padding: 4px;
       
      }
      .joker {
          width: 100%;
      }

      .no-chat {
        color: #0F0;
        font-size: 45px;
        position:relative;
        font-family: matrix;

      }
      .corchete {
        font-family: Verdana;
      }

      form {
        margin-bottom: 0;
      }

      /*PÁGINA CHAT INDEX*/

      

      /*FINAL PAGINA CHAT INDEX*/

      /*PAGINA CREAR CHAT*/
      /*INCREIBLE CODI PARA UN FONO SOLO CON CSS, AMB LA FUNCIÓ GRADIENT*/
    /* body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}*/

.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
    background: rgba(0,0,0,0.5);
    margin-top:2px;
}
.card-container.card h2 {
    font-family: matrix;
    font-size: 50px;
    color:#0F0;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 70%;
    height: 80%;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    /*background-color: rgb(104, 145, 162);*/
    background:  rgba(55,71,79,0.8); 
        border-color: #0F0;
        width: 100%;
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
   
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}



      /*FINAL PAGINA CREAR CHAT*/
    </style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{url('/')}}">MatriXlogic</a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
       @if( Auth::check() )
        
        <li {{ Request::is('chat/show')? ' class=active':''}}>
          <a  href="{{url('/chat')}}">CHAT</a>
        </li>
        <li {{ Request::is('chat/crear') ? ' class=active' : ''}}>
            <a href="{{url('/chat/crear')}}">Crear chat</a>
        </li>
      @endif
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
       @if(Auth::guest())
        <li {{ Request::is('user/registro') ? ' class=active' : ''}}>
          <a href="{{url('/register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
        </li>
         <li  class='active'>
          <a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        </li>
        @else
        
         <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
          </li>
        
          <li {{ Request::is('user/account') ? ' class=active' : ''}}>
            <a href="{{url('user/account')}}"><span class="glyphicon glyphicon-user"></span>Cuenta</a>
          </li>
          @endif    
      </ul>
    </div>
  </div> 
</nav>
