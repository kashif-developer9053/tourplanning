<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Tour Viet Admin</title>
  <link rel="stylesheet" href="{{asset('css/admin/sign.css')}}">
  <script src="https://kit.fontawesome.com/0426dedeb4.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

  <h2>VIETTOUR - Your Best Friend</h2>
  <div class="container" id="container">
    <div class="form-container sign-in-container">
      <form action="checklogin">
        <h1>Sign in</h1>
        <span class="span">or use your account</span>
        <input type="email" placeholder="Email" name="email"/>
        <input type="password" placeholder="Password" name="password"/>
        @if ($errors->any())
        <small style="color: red"> Email or password is wrong, please login again !</small>
        @endif
        @if (session('msg'))
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

        </div>
      </div>
    </div>
  </div>

<script src="{{asset('js/admin/sign.js')}}"></script>
</body>
</html>
