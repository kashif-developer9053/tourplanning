@extends('userlayout')

@section('content')
    

    <div class="container mt-5 mb-5 pt-5">

        @foreach ($news as $n)
            <div class="row">
            <div class="col-sm-7">

                <div class="row">
                  <h2>{{$n->news_name}}</h2>
                </div>
                <div class="row">
                    @php
                    $date=strtotime($n->news_date);
                    @endphp
                        <span style="font-weight:bold">Travel News <span style="font-weight: normal"> {{date("d-m-Y",$date)}}</span></span>  
                </div>
                <div class="row mt-4 mb-4">
                    <span>{{$n->newstitle}}</span>
                </div>
                <div class="row mt-2 mb-4">
                        <a href=""><img width="700px" height="400px" src="{{asset('images/'.$n->img2)}}" alt=""></a>
                </div>
                <div class="row">
                    {{$n->news_content}}
                </div>
                <div class="row mt-4 mb-4">
                    <a href=""><img width="700px" height="400px" src="{{asset('images/'.$n->img3)}}" alt=""></a>
                </div>
                <div class="row mb-5">
                  {{$n->content2}}
                </div>
                    <hr>
                    Travel Company TOURVIET <br>
                    590 CMT8 ward 11 District 3 Ho Chi Minh city <br>
                    Tel: (028) 3822 8898 | Hotline: 1900 1839 <br>
                    Fanpage: https://www.fb.com/tourviet
            </div>

            <div class="col-sm-5 mt-5">
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <h3>Related Tour</h3>
                </div>
                @foreach ($news2 as $n2)
                <div class="row mb-3">
                    <div class="col-sm-6">
                        <a href="{{url('user/newsdetail/'.$n2->news_id)}}"><img style="border: 1px solid rgba(0, 0, 0, 0);border-radius:7px" width="250px" height="150px" src="{{asset('images/'.$n2->img1)}}" alt=""></a>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="text-danger">{{$n2->news_name}}</h5>
                        <small>{{$n2->news_date}}</small>
                    </div>
               </div>
                @endforeach
            </div>
        </div>
        @endforeach
        
    </div>




@endsection

@section('title')
    News
@endsection

@section('linkcss')
    
@endsection

@section('name')
    
@endsection