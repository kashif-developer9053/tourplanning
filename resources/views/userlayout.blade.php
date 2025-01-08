<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="@yield('linkcss')">
    <link rel="stylesheet" href="{{asset('css/user/header.css')}}">
    <script src="https://kit.fontawesome.com/0426dedeb4.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>


</head>
<body>

<style>
    a{
  text-decoration: none;
  
}
.empty{
    height:7rem;
    width: 100%;
}

.logout{
    color:red;
    font-size:1.5rem;
    background-color:white;
    padding:5px;
    border-radius:5px;
    font-weight:bolder;

}
</style>

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>A</span>DVENTURE CLUB</a>

    <nav class="navbar">
        <a style="text-decoration:none" href="{{url('user/home')}}">Home</a>

        <a href="{{url('ai/map')}}">Map Assist</a>
        <a href="{{url('user/tour')}}">packages</a>

        <a href="{{url('ai')}}">AI Assistant</a>
        <a href="{{url('user/news')}}">News</a>

        <a href="{{url('user/contact')}}">contact</a>
        

@if (session('userName'))
    <a class="nav-link" href="{{url('user/profile')}}"><i class="fas fa-user my-2" id="login-btn"> </i><small>{{session()->get('userName')}}</small></a> <a class="nav-link " href="logout"><h6 class="logout">logout</h6></a>
@else

<div class="icons">
<a class="nav-link" href="sign">Login<i class="fas fa-user my-2" id="login-btn"> </i></a>
        
    </div>

@endif
</i>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<div class="empty">

</div>
   

      @yield('content')

      <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>ABOUT US</h3>
            <p>When the missionaries came to Africa they had the Bible and we had the land. They said 'Let us pray.' We closed our eyes. When we opened them we had the Bible and they had the land.
            So Enjoy!</p>
        </div>
    
        <div class="box">
            <h3>QUICK LINKS</h3>
            <a href="#home">Home</a>
            <a href="#book">Book</a>
            <a href="#packages">Packages</a>
            <a href="#services">Services</a>
            <a href="#gallery">Gallery</a>
            <a href="#review">Review</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="box">
            <h3>FOLLOW US</h3>
            <a href="https://www.facebook.com/profile.php?id=61559275240231&sk=about">Facebook</a>
            <a href="https://www.instagram.com/adventureclub4?igsh=MXYxNTA3bmFweXdzcQ==">Instagram</a>
            
        </div>

    </div>

    <h1 class="credit"><span> <a href="#">Adventure Club</a> </span> | all rights reserved! </h1>

</section>

    <script src="@yield('linkjs')"></script>
    @yield('page-script')
</body>
</html>
