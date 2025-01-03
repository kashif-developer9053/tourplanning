@extends('adminlayout')

@section('content')

<div class="content">

    <div class="one">
        <div class="search-block">
            <span>Search Tour for here</span>
            <form action="tour">
                <input type="text" name="search">
                <button>Search</button>
            </form>
        </div>
        <div class="insert">
            <form action="control/insertTour">
                <button>Insert</button>
            </form>
        </div>
    </div>

    @if (session('msg'))
    <div class="msg-block">
        <span class="msg">{{ session('msg') }}</span>
    </div>
    @endif

    @if (session('msg-warn'))
    <div class="msg-block">
        <span class="msg-warn">{{ session('msg-warn') }}</span>
    </div>
    @endif


    <div class="table-content">
        <table class="container">
            <thead>
                <tr>
                    <th>
                        <h1>ID</h1>
                    </th>
                    <th>
                        <h1>Name</h1>
                    </th>
                    <th>
                        <h1>Duration</h1>
                    </th>
                    <th>
                        <h1>Point</h1>
                    </th>
                    <th>
                        <h1>Destination</h1>
                    </th>
                    <th>
                        <h1>Price</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tour as $t)
                <tr>
                    <td data-label="ID">{{$t->tour_id}}</td>
                    <td data-label="Name">{{$t->tour_name}}</td>
                    <td data-label="Duration">{{$t->duration}}</td>
                    <td data-label="Place start">{{$t->location_start}}</td>
                    <td data-label="Place start">{{$t->place}}</td>
                    <td data-label="Price">{{$t->price1}}$</td>
                    <td data-label="Control">
                    <div>
                        <a href="control/updateTour/{{$t->tour_id}}"><button>Update</button></a>
                        <a href="control/deleteTour/{{$t->tour_id}}"><button>Delete</button></a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection

@section('title')
    Tour
@endsection

@section('linkcss')
    {{asset('css/admin/tour.css')}}
@endsection

@section('linkjs')

@endsection
