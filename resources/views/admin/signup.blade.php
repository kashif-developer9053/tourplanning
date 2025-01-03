<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Tour Viet Admin</title>
  <link rel="stylesheet" href="{{asset('css/admin/signup.css')}}">
  <script src="https://kit.fontawesome.com/0426dedeb4.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

  <h2>VIETTOUR - Your Best  Friend</h2>
  <div class="container right-panel-active" id="container">
    <div class="form-container sign-up-container">
      <form action="checkregister">
        <h1>Create Account</h1>
        <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"/>
        @error('name')
            <span style="color: red">{{$message}}</span>
         @enderror
        <input type="text" placeholder="Email" name="email" value="{{ old('email') }}"/>
        @error('email')
        <span style="color: red">{{$message}}</span>
    @enderror
        <input type="text" placeholder="Password" name="pass" value="{{old('pass')}}"/>
        @error('pass')
        <span style="color: red">{{$message}}</span>
    @enderror
    <input style="" type="radio" id="staff" name="role" value="0"><label for="staff">Staff</label><br>
    <input style="" type="radio" id="admin" name="role" value="1"><label for="admin">Admin</label><br>
        @error('role')
        <span style="color: red">{{$message}}</span>
    @enderror
        <button>Sign Up</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
        </div>
      </div>
    </div>
  </div>


<script src="{{asset('js/admin/sign.js')}}"></script>
</body>
</html>