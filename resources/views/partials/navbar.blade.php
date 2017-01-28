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
          <a  href="{{url('/chat/show')}}">Chat</a>
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
