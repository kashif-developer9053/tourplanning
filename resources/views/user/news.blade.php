@extends('userlayout')

@section('content')

    <div class="container mt-5 pt-5 mb-5 pb-5">
        <div class="row mt-5">
            <h2 class=" text-danger center">Tour Viet News</h2>
        </div>
        <div class="row mt-5 mb-5">
            @foreach ($new1 as $n1)
            <div class="col-sm-7">
                <a href="newsdetail/{{$n1->news_id}}"><img style="border: 1px solid rgba(0, 0, 0, 0);border-radius:7px" width="700px" height="auto" src="{{asset('images/'.$n1->img1)}}" alt=""></a>
                 <a style="text-decoration: none" href="newsdetail/{{$n1->news_id}}"><h3 class="mt-3">{{$n1->news_name}}</h3></a>
                 @php
                 $date=strtotime($n1->news_date);
                 @endphp
                <span>{{date("d-m-Y",$date)}}</span>
            </div>
            @endforeach

            <div class="col-sm-5">
                @foreach ($new2 as $n2)
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="newsdetail/{{$n2->news_id}}"><img style="border: 1px solid rgba(0, 0, 0, 0);border-radius:7px" width="250px" height="150px" src="{{asset('images/'.$n2->img1)}}" alt=""></a>
                    </div>
                    <div class="col-sm-6">
                        <a style="text-decoration: none" href="newsdetail/{{$n1->news_id}}"><h5 class="">{{$n2->news_name}}</h5></a>
                        <small>{{$n2->news_date}}</small>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <div class="row">
            <div class="col-sm-11">
                <h5>Travel Guide</h5>
            </div>
            <div class="col-sm-1">
                <a style="text-decoration: none" href="allnews"><h6>View All</h6></a>
            </div>
        </div>
        <div class="row">
            @foreach ($new3 as $n3)
            <div class="col-sm-4">
                <a href="newsdetail/{{$n3->news_id}}"><img style="border: 1px solid rgba(0, 0, 0, 0);border-radius:7px" width="400px" height="auto" src="{{asset('images/'.$n3->img1)}}" alt=""></a>
                <a style="text-decoration: none" href="newsdetail/{{$n1->news_id}}"><h5 class=" mt-2">{{$n3->news_name}}</h5></a>
                <small>{{$n3->news_date}}</small>
            </div>
            @endforeach
        </div>
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
