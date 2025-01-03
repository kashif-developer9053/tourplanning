@extends('adminlayout')

@section('content')

<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search Tour for here</span>
            <form action="schedule" >
                From <input type="date" name="from" id="from">
                To <input type="date" name="to" id="to">
                <button>Search</i></button>
            </form>
        </div>
        <div class="insert">
            <form action="control/insertSchedule">
                <button>Insert</button>
            </form>
        </div>
    </div>
    @if ($errors->any())
    <div style="color: red;width:100%;"> Input is wrong, please try again ! </div>
    @endif

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
                        <h1>Schedule id</h1>
                    </th>
                    <th>
                        <h1>Tour id</h1>
                    </th>
                    <th>
                        <h1>Tour code</h1>
                    </th>
                    <th>
                        <h1>Date start</h1>
                    </th>
                    <th>
                        <h1>Date end</h1>
                    </th>
                    <th>
                        <h1>Tour guide id</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($schedule as $sche)
                <tr>
                    <td data-label="ID">{{$sche->schedule_id}}</td>
                    <td data-label="Tour id">{{$sche->tour->tour_name}}</td>
                    <td data-label="Tour code">{{$sche->tour_code}}</td>
                    @php
                    $start=strtotime($sche->date_start);
                    $end=strtotime($sche->date_end);
                    @endphp
                    <td data-label="date start">{{date("d-m-Y ",$start)}}</td>
                    <td data-label="date end">{{date("d-m-Y ",$end)}}</td>
                    <td data-label="Guide">{{$sche->tour_guide->name}}</td>
                    <td data-label="Control">
                        <div>
                            <a href="control/updateSchedule/{{$sche->schedule_id}}"><button>Update</button></a>
                            <a href="control/deleteSchedule/{{$sche->schedule_id}}"><button>Delete</button></a>
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
    Tour Schedule
@endsection

@section('linkcss')
    {{asset('css/admin/schedule.css')}}
@endsection

@section('linkjs')

@endsection

@section('page-script')

@endsection

