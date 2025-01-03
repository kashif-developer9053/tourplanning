@extends('userlayout')

@section('content')
<style>
    .container{
        margin:7rem 2rem;
    }
</style>

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="{{asset('images/contact-img.svg')}}" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="Full name" required>
                <input type="email" placeholder="Email" required>
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Phone no." required>
                <input type="text" placeholder="Place" required>
            </div>
            <textarea placeholder="Message" name="" id="" cols="30" rows="10">Type your message here...!</textarea>
            <input type="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

@endsection

@section('title')
    About
@endsection

@section('linkcss')
    {{asset('css/user/contact.css')}}
@endsection

@section('linkjs')

@endsection
