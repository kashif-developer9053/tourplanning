@extends('adminlayout')

@section('content')

    @if (session('msg'))
        <div class="msg">
            {{ session('msg') }}
        </div>
    @endif


<div class="cards">

    <div class="card-single">
        <div>
            <h1>{{$countUser}}</h1>
            <span>Customer</span>
        </div>
        <div>
            <span class="fa-solid fa-user"></span>
        </div>
    </div>

    <div class="card-single">
        <div>
            <h1>{{$countTour}}</h1>
            <span>Tour</span>
        </div>
        <div>
            <span class="fa-solid fa-user"></span>
        </div>
    </div>
    <div class="card-single">
        <div>
            <h1>{{$countOrder}}</h1>
            <span>Order</span>
        </div>
        <div>
            <span class="fa-solid fa-user"></span>
        </div>
    </div>
    <div class="card-single">
        <div>
            <h1>{{$countFeedback}}</h1>
            <span>Feedback</span>
        </div>
        <div>
            <span class="fa-solid fa-user"></span>
        </div>
    </div>
</div>

<div class="recent-grid">
    <div class="projects">
        <div class="card">
            <div class="card-header">
                <h2>Rencent Order Tour</h2>
                <a href="{{url('admin/order')}}"><button>See all <span class="fa-solid fa-arrow-right"></span></button></a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>Tour Code</td>
                                <td>Date start</td>
                                <td>Amount</td>
                                <td>User Email</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $or)
                            <tr>
                                <td>{{$or->tour_code}}</td>
                                @php
                                    $d=strtotime($or->date_book);
                                @endphp
                                <td>{{date("d-m-Y", $d)}}</td>
                                <td>{{$or->amount}}$</td>
                                <td>{{$or->email}}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="customers">
        <div class="card">
            <div class="card-header">
                <h3>News customer</h3>
                <a href="{{url('admin/customer')}}"><button>See all <span class="fa-solid fa-arrow-right"></span></button></a>
            </div>

            @foreach ($customer as $cus)
                <div class="card-body">
                    <div class="customer">
                        <div class="info">
                            <div>
                                <h5>{{$cus->user_name}}</h5>
                                <small>{{$cus->email}}</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="fa-solid fa-phone"></span>
                            <span class="fa-solid fa-envelope"></span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

@section('title')
    Dashboard
@endsection

@endsection

@section('linkcss')
    {{asset('css/admin/dashboard.css')}}
@endsection

@section('linkjs')
    {{asset('js/admin/dashboard.js')}}
@endsection
