<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Admin</title>
    <link rel="stylesheet" href="@yield('linkcss')">
    <link rel="stylesheet" href="{{asset('css/admin/header.css')}}">
    <script src="https://kit.fontawesome.com/0426dedeb4.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="fa-solid fa-torii-gate"></span><span> Adventure Club</span></h2>
       </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard"><span><i class="fa-solid fa-house"></i></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="tour"><span><i class="fa-solid fa-umbrella-beach"></i></span><span>Tour</span></a>
                </li>
                <li>
                    <a href="schedule"><span><i class="fa-solid fa-calendar-days"></i></span><span>Tour Schedule</span></a>
                </li>
                <li>
                    <a href="order"><span><i class="fa-solid fa-cart-arrow-down"></i></span><span>Order</span></a>
                </li>
                <li>
                    @if (session('role') == 0)
                    <a hidden ><span><i class="fa-regular fa-house-lock"></i></span><span>Customer (Lock)</span></a>
                    @else
                    <a href="customer"><span><i class="fa-solid fa-user-group"></i></span><span>Customer</span></a>
                    @endif
                </li>
                <li>
                    @if (session('role') == 0)
                    <a ><span><i class="fa-regular fa-house-lock"></i></span><span>Staff (Lock)</span></a>

                    @else
                    <a href="staff"><span><i class="fa-solid fa-user-gear"></i></span><span>Staff</span></a>

                    @endif
                </li>
                <li>
                    <a href="news"><span><i class="fa-solid fa-newspaper"></i></span><span>News</span></a>
                </li>
                <li>
                    <a href="places"><span><i  class="fa-solid fa-map-location-dot"></i></span><span>Places</span></a>
                </li>
                <li>
                    <a href="feedback"><span><i class="fa-solid fa-comments"></i></span><span>Feedback</span></a>
                </li>
                <li>
                   @if (session('role') == 0)
                   <a ><span><i class="fa-regular fa-house-lock"></i></span><span>Tour Guide</span></a>
                   @else
                   <a href="tourguide"><span><i class="fa-solid fa-person-hiking"></i></span><span>Tour Guide</span></a>
                   @endif
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="fa-solid fa-bars"></span>
                </label>
                @yield('title')
            </h2>

            <div class="user-wrapper">
                <a href=""><img src="https://www.bing.com/th?id=OIP.G0HYqUhsfV7lwPgGKPKh0gHaE7&w=163&h=106&c=8&rs=1&qlt=90&o=6&dpr=1.25&pid=3.1&rm=2"
                    alt="" width="40px" height="40px"></a>
                <div>
                    <a href=""><h4> {{ session()->get('adminName') }} </h4></a>
                    <small><a href="{{url('admin/logout')}}">Log out <span class="fa-solid fa-right-from-bracket" ></span></a></small>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>


    <script src="@yield('linkjs')"></script>
    <script>
        $('#nav-toggle').on('change', function(){
    ($('#nav-toggle').is(':checked')) ? (
        $('.sidebar-menu').addClass('collapse')
    ) : (
        $('.sidebar-menu').removeClass('collapse')
    );
    });
    </script>
</body>
</html>
