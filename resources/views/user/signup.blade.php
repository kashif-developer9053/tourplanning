@extends('userlayout')

@section('content')

<div class="sign-container right_panel" id="container">
  <div class="form-container sign-up-container">
    <form action="checkRegister">
      <h3>Create Account</h3>
      <input type="text" placeholder="Name" name="name" value="{{old('name')}}"/>
      @error('name')
      <small style="color: red">{{$message}}</small>
      @enderror
      <input type="text" placeholder="Email" name="email" value="{{old('email')}}"/>
      @error('email')
      <small style="color: red">{{$message}}</small>
      @enderror
      <input type="text" placeholder="Password" name="pass" value="{{old('pass')}}"/>
      @error('pass')
      <small style="color: red">{{$message}}</small>
      @enderror
      <input type="text" placeholder="Number Phone" name="phone" min="9" max="12" value="{{old('phone')}}"/>  
      @error('phone')
      <small style="color: red">{{$message}}</small>
     @enderror
      <input type="text" placeholder="Address" name="address" value="{{old('address')}}"/>  
      @error('address')
      <small style="color: red">{{$message}}</small>
     @enderror
      <button>Sign Up</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login with your personal info</p>
        <a href="sign"><button class="ghost" id="signIn">Sign In</button></a>
      </div>
    </div>
  </div>
</div>

@endsection

@section('title')
    Sign in
@endsection

@section('linkcss')
    {{asset('css/user/signup.css')}}
@endsection

@section('linkjs')
  
@endsection