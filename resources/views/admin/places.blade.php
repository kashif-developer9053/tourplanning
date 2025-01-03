@extends('adminlayout')

@section('content')
    
<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search Places for here</span>
            <form action="">
                <input type="text" name="search">
                <button>Search</i></button>
            </form>
        </div>
        <div class="insert">
            <form action="control/insertPlaces">
                <button>Insert</button>
            </form>
        </div>
    </div>

    @if (session('msg'))
    <div class="msg-block">
        <span class="msg">{{ session('msg') }}</span>
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
                        <h1>Control</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($location as $l)
                <tr>
                    <td data-label="Name">{{$l->location_id}}</td>
                    <td data-label="Name">{{$l->location_name}}</td>
                    <td data-label="Control">
                        <div>
                            <a href="control/updatePlaces/{{$l->location_id}}"><button>Update</button></a>
                            <a href="control/deletePlaces/{{$l->location_id}}"><button>Delete</button></a>
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
    Places
@endsection

@section('linkcss')
    {{asset('css/admin/places.css')}}
@endsection

@section('linkjs')

@endsection