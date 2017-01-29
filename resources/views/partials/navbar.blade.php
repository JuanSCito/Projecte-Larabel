
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
      
      
        

      .container-fluid {
        top:;
        z-index: 1000;
        background: transparent;
        margin:0;
        padding-left:0;
     

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
        color: #0F0;
        font-family: matrix;

      }
      .formulario .panel.panel-default{
        background: transparent;
        padding: 20px;
        border: 1px solid #0F0;;
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
        color: #0F0;
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
        border: 1px solid #0F0;;
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
        height: 430px;
        background: rgba(0,255,0,0.2);
      }
      .chat .respuesta {
         height: 430px;
         background: rgba(0,255,0,0.2);
      }

      /*PÁGINA CHAT INDEX*/



      /*FINAL PAGINA CHAT INDEX*/
    </style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{url('/')}}">WebSiteName</a>
    </div>
    @if( true || Auth::check() )
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li  {{ Request::is('*') && !Request::is('chat/crear') ? ' class=active':''}}>
          <a href="{{url('/')}}">Home</a>
        </li>
        <li {{ Request::is('chat/show')? ' class=active':''}}>
          <a  href="{{url('/chat')}}">CHAT</a>
        </li>
        <li {{ Request::is('chat/crear') ? ' class=active' : ''}}>
            <a href="{{url('/chat/crear')}}">Crear chat</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li {{ Request::is('user/registro') ? ' class=active' : ''}}>
          <a href="{{url('user/registro')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
        </li>
         <li{{ Request::is('auth/login') ? ' class=active' : ''}}>
          <a href="{{url('/auth/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a>
        </li>
        @endif
        <li {{ Request::is('user/account') ? ' class=active' : ''}}>
          <a href="{{url('user/account')}}"><span class="glyphicon glyphicon-user"></span>Cuenta</a>
        </li>    
      </ul>
    </div>
  </div> 
</nav>
