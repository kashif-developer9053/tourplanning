@extends('userlayout')

@section('content')

<div class="sign-container" id="container">
  <div class="form-container sign-in-container">
    <form action="checkLogin">
      <h1>Sign in</h1>
      <input type="text" placeholder="Email" name="email" />
      <input type="password" placeholder="Password" name="pass" />
      @if ($errors->any())
      <small style="color: red"> Email or password is wrong, please login again !</small>
      @endif
      @if(session('msg'))
      <small style="color: red"> {{session('msg')}} </small>
      @endif
      <a href="#">Forgot your password?</a>
      <button>Sign In</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-right">
        <h1>Hello, Friend!</h1>
        <p>Enter your personal details and start journey with us</p>
        <a href="register"><button class="ghost" id="signUp">Sign Up</button></a>
      </div>
    </div>
  </div>
</div>

@endsection

@section('title')
    Sign in
@endsection

@section('linkcss')
    {{asset('css/user/sign.css')}}
@endsection

@section('linkjs')

@endsection
