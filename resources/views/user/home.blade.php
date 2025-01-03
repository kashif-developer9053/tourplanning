@extends('userlayout')

@section('content')

<style>
    .btn{
  display: inline-block;
  margin-top: 1rem;
  background:var(--orange);
  color:#fff;
  padding:.8rem 3rem;
  border:.2rem solid var(--orange);
  cursor: pointer;
  font-size: 1.7rem;
}

.box2 {
    border: none;
    border-radius: 5px;
    overflow: hidden;
    background-color: #fff;
    margin-bottom: 20px;
    transition: transform 0.3s;
    box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
    
}

.box2 img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.box2 .content {
    padding: 15px;
    font-size:1.5rem;
}

.box2 .stars i {
    color: #ffd700;
}

.box2 .price {
    font-size: 1.2rem;
    color: #ff5733;
    margin: 10px 0;
}

.box2 .price span {
    text-decoration: line-through;
    color: #aaa;
}


.btn:hover {
    background-color: #0056b3;
}


.packages .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:2rem;
}

.packages .box-container .box{
  flex:1 1 30rem;
  border-radius: .5rem;
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
}

.packages .box-container .box img{
  height: 25rem;
  width:100%;
  object-fit: cover;
}

.packages .box-container .box .content{
  padding:2rem;
}

.packages .box-container .box .content h3{
  font-size:2rem;
  color:#333;
}

.packages .box-container .box .content h3 i{
  color:var(--orange);
}

.packages .box-container .box .content p{
  font-size:1.7rem;
  color:#666;
  padding:1rem 0;
}

.packages .box-container .box .content .stars i{
  font-size:1.7rem;
  color:var(--orange);
}

.packages .box-container .box .content .price{
  font-size: 2rem;
  color:#333;
  padding-top: 1rem;
}

.packages .box-container .box .content .price span{
  color:#666;
  font-size: 1.5rem;
  text-decoration: line-through;
}

.services .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.services .box-container .box{
  flex: 1 1 30rem;
  border-radius: .5rem;
  padding:1rem;
  text-align: center;
}

.services .box-container .box i{
  padding:1rem;
  font-size: 5rem;
  color:var(--orange);
}

.services .box-container .box h3{
  font-size: 2.5rem;
  color:#333;
}

.services .box-container .box p{
  font-size: 1.5rem;
  color:#666;
  padding:1rem 0;
}

.services .box-container .box:hover{
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
}

.gallery .box-container{
  display: flex;
  flex-wrap: wrap;
  gap:1.5rem;
}

.gallery .box-container .box{
  overflow: hidden;
  box-shadow: 0 1rem 2rem rgba(0,0,0,.1);
  border:1rem solid #fff;
  border-radius: .5rem;
  flex:1 1 30rem;
  height: 25rem;
  position: relative;
}

.gallery .box-container .box img{
  height: 100%;
  width:100%;
  object-fit: cover;
}

.gallery .box-container .box .content{
  position: absolute;
  top:-100%; left:0;
  height: 100%;
  width:100%;
  text-align: center;
  background:rgba(0,0,0,.7);
  padding:2rem;
  padding-top: 5rem;
}

.gallery .box-container .box:hover .content{
  top:0;
}

.gallery .box-container .box .content h3{
  font-size: 2.5rem;
  color:var(--orange);
}

.gallery .box-container .box .content p{
  font-size: 1.5rem;
  color:#eee;
  padding:.5rem 0;
}

</style>
<section class="home" id="home">

    <div class="content">
        <h3>Adventure is worthwhile</h3>
        <p>Discover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="{{asset('images/vid-1.mp4')}}" loop autoplay muted></span>
        <span class="vid-btn" data-src="{{asset('images/vid-2.mp4')}}"></span>
        <span class="vid-btn" data-src="{{asset('images/production ID-4763824.mp4')}}"></span>
        <span class="vid-btn" data-src="{{asset('images/Time Lapse Video Of Night Sky.mp4')}}"></span>
        <span class="vid-btn" data-src="{{asset('images/production ID-4087433.mp4')}}"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>


<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="{{asset('images/book-img.jpg')}}" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <h3>Where To Go!</h3>
                <input type="text" placeholder="Type your placename">
            </div>
            <div class="inputBox">
                <h3>How Many</h3>
                <input type="number" placeholder="Enter number of Guests">
            </div>
            <div class="inputBox">
                <h3>Arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>Leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="BOOK NOW">
        </form>

    </div>

</section>



    
        <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="container mt-4 mb-5" id="packages">
    <div class="row">
        <!-- Tour B -->
        @foreach ($tourB as $t)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="box2">
                    <img src="{{ url('images/' . $t->img1) }}" alt="Tour Image">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i> {{ $t->location_start }}</h3>
                        <p>{{ $t->tour_name }}</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            {{ $t->price1 }}.00$ 
                            <span>Rs{{ number_format($t->price1 + 3000, 2) }}</span>
                        </div>
                        <form action="{{ url('user/tour') }}" method="get">
                            <input type="hidden" name="region" value="{{ $t->region }}">
                            <button class="btn btn-outline-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Tour T -->
        @foreach ($tourT as $t)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="box2">
                    <img src="{{ url('images/' . $t->img1) }}" alt="Tour Image">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i> {{ $t->location_start }}</h3>
                        <p>{{ $t->tour_name }}</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            {{ $t->price1 }}.00$ 
                            <span>Rs{{ number_format($t->price1 + 3000, 2) }}</span>
                        </div>
                        <form action="{{ url('user/tour') }}" method="get">
                            <input type="hidden" name="region" value="{{ $t->region }}">
                            <button class="btn btn-outline-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Tour N -->
        @foreach ($tourN as $t)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="box2">
                    <img src="{{ url('images/' . $t->img1) }}" alt="Tour Image">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i> {{ $t->location_start }}</h3>
                        <p>{{ $t->tour_name }}</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">
                            {{ $t->price1 }}.00$ 
                            <span>Rs{{ number_format($t->price1 + 3000, 2) }}</span>
                        </div>
                        <form action="{{ url('user/tour') }}" method="get">
                            <input type="hidden" name="region" value="{{ $t->region }}">
                            <button class="btn btn-outline-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="mt-3 mb-5" style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center;">
    @foreach ($place as $p)
    <div class="card-place" style="width: 300px; border-radius: .5rem; overflow: hidden; box-shadow: 0 1rem 2rem rgba(0,0,0,.1);">
        <img src="{{ url('images/' . $p->img) }}" alt="" style="height: 25rem; width: 100%; object-fit: cover;">
        <div class="content" style="padding: 2rem;">
            <h3 style="font-size: 2rem; color: #333;">{{ $p->location_name }}</h3>
            <p style="font-size: 1.7rem; color: #666; padding: 1rem 0;">Explore the beautiful destination of {{ $p->location_name }}. Discover its charm and beauty!</p>
            <form action="{{ url('user/tour') }}" method="GET">
                <input type="hidden" name="end" value="{{ $p->location_name }}">
                <button type="submit" class="btn" style="border: none; outline: none; font-size: 1.7rem; padding: 0.5rem 1rem; color: white; background: var(--orange); border-radius: .5rem;">See more</button>
            </form>
        </div>
    </div>
    @endforeach
</div>


        <section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>AFFORDABLE HOTELS</h3>
            <p>We provide the best luxury hotels for our travelers . Which contain helpful staff, free Wi-Fi and healthy meal.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>FOOD AND DRINKS</h3>
            <p>Surely we don’t compromise on food so we provide best and healthy food for a balanced diet .</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>SAFETY GUIDE</h3>
            <p> 1)    Stay connected to the guide.
                2)	Ask locals for advice.
                3)	Keep your Identity card with you.</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>AROUND THE WORLD</h3>
            <p>We provide world wide service to the travelers .Here is my email (fahadliaquatkhan@gmail.com) any one from anywhere can access us from it.</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>FASTEST TRAVEL</h3>
            <p>Travel takes us out of our comfort zones and inspires us to see, taste and try new things, so for this we provide the best and fast bus service which cover long distance in just hours .</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>ADVENTURES</h3>
            <p>Avoiding danger is no safer in the long run than outright exposure. Life is either a daring adventure or nothing.</p>
        </div>

    </div>

</section>

        

    <script>

document.addEventListener('DOMContentLoaded', function () {
    let videoBtns = document.querySelectorAll('.vid-btn');
    let videoSlider = document.getElementById('video-slider');
    
    // Automatically play the video on page reload if there's an active button
    let activeBtn = document.querySelector('.vid-btn.active');
    if (activeBtn) {
        videoSlider.src = activeBtn.getAttribute('data-src');
        videoSlider.play(); // Auto-play the video
    }

    videoBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            // Remove active class from all buttons
            videoBtns.forEach(btn => btn.classList.remove('active'));
            // Add active class to the clicked button
            this.classList.add('active');
            // Change video source
            videoSlider.src = this.getAttribute('data-src');
            videoSlider.play(); // Auto-play the video on button click
        });
    });
});


        let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        450: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 5,
        },
      },
});
    </script>

    @endsection

    @section('title')
        Home
    @endsection

    @section('linkcss')
        {{ asset('css/user/home.css') }}
    @endsection

    @section('linkjs')
        {{ asset('js/user/home.js') }}
    @endsection
