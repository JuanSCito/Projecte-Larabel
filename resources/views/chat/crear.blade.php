@extends('layouts.master')

@section('content')

 
	<div class="col-md-12crear-chat">
	    <div class="container" >
        <div class="card card-container" id="crear-chat">
        <h2>Chat create</h2>
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="{{ url('/images/joker.png') }}" />
            <p id="profile-name" class="profile-name-card"></p>

            <form action="{{ url('/chat/store') }}" method="POST" class="form-signin">
                {{ csrf_field() }}
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="chat-name" class="form-control" placeholder="Chat name" name="chat-name"required autofocus>
                <input type="password" id="chat-password" class="form-control"  name="chat-password" placeholder="Password" >
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
           <!-- <a href="#" class="forgot-password">
                Forgot the password?
            </a>
            -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</div>


@stop