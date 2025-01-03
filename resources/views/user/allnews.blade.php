@extends('userlayout')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <h4 class="center text-danger">All Tour Viet News</h4>
        </div>
        <br>
        <hr>
        
            @foreach ($news as $n)
            <div class="row mb-5">
            <div class="col-sm-4">
                <a href="newsdetail/{{$n->news_id}}"><img style="border: 1px solid rgba(0, 0, 0, 0);border-radius:7px" width="400px" height="250" src="{{asset('images/'.$n->img1)}}" alt=""></a>
            </div>
            <div class="col-sm-8">
                <h2 style="" class="mt-2">{{$n->news_name}}</h2>
                @php
                $date=strtotime($n->news_date);
                @endphp
                <small>{{date("d-m-Y",$date)}}</small>
                <p class="mt-3">
                   {{$n->newstitle}}
                </p>
            </div>
        </div>
            @endforeach
        
    </div>

@endsection

@section('title')
    News
@endsection

@section('linkcss')
    {{asset('css/user/news.css')}}
@endsection

@section('linkjs')
    
@endsection