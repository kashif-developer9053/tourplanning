@extends('adminlayout')

@section('content')

<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search Tour-Guide for here</span>
            <form action="">
                <input type="text" name="search">
                <button>Search</i></button>
            </form>
        </div>
    </div>

    @if (session('msg'))
    <div class="msg-block">
        <span class="msg">{{ session('msg') }}</span>
    </div>
    @endif

    <h3 class="on">Active Guide</h3
        >
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
                        <h1>Email</h1>
                    </th>
                    <th>
                        <h1>Password</h1>
                    </th>
                    <th>
                        <h1>Phone</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($guideOn as $on)
                <tr>
                    <td data-label="ID">{{$on->tour_guide_id}}</td>
                    <td data-label="Name">{{$on->name}}</td>
                    <td data-label="Email">{{$on->email}}</td>
                    <td data-label="Gender">{{$on->gender}}</td>
                    <td data-label="Phone">{{$on->phone}}</td>
                    <td data-label="Control">
                        <div>
                            <a class="btn-off" href="control/lockGuide/{{$on->tour_guide_id}}"><button>Lock</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h3 class="off">Inactive Guide</h3>

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
                        <h1>Email</h1>
                    </th>
                    <th>
                        <h1>Password</h1>
                    </th>
                    <th>
                        <h1>Phone</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($guideOff as $off)
                <tr>
                    <td data-label="ID">{{$off->tour_guide_id}}</td>
                    <td data-label="Name">{{$off->name}}</td>
                    <td data-label="Email">{{$off->email}}</td>
                    <td data-label="Gender">{{$off->gender}}</td>
                    <td data-label="Phone">{{$off->phone}}</td>
                    <td data-label="Control">
                        <div>
                            <a button class="btn-on" href="control/unlockGuide/{{$off->tour_guide_id}}"><button>Unlock</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@section('title')
  Tour Guide
@endsection

@endsection

@section('linkcss')
    {{asset('css/admin/tourguide.css')}}
@endsection

@section('linkjs')

@endsection
