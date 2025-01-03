@extends('adminlayout')

@section('content')

<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search Staff for here</span>
            <form action="">
                <input type="text" name="search">
                <button>Search</i></button>
            </form>
        </div>

        <div class="signup">
            <a href="{{url('admin/signup')}}">SIGN UP</a>
        </div>

    </div>

    @if (session('msg'))
    <div class="msg-block">
        <span class="msg">{{ session('msg') }}</span>
    </div>
    @endif

    <h3 class="on">Active Staff</h3>
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
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($staffOn as $ston)
                <tr>
                    <td data-label="ID">{{$ston->id}}</td>
                    <td data-label="Name">{{$ston->name}}</td>
                    <td data-label="Email">{{$ston->email}}</td>
                    <td data-label="Password">{{$ston->password}}</td>
                    <td data-label="Control">
                        <div>
                            <a class="btn-off" href="control/lockStaff/{{$ston->id}}"><button>Lock</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h3 class="of">Inactive Staff</h3>

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
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($staffOff as $stoff)
                <tr>
                    <td data-label="ID">{{$stoff->id}}</td>
                    <td data-label="Name">{{$stoff->name}}</td>
                    <td data-label="Email">{{$stoff->email}}</td>
                    <td data-label="Password">{{$stoff->password}}</td>
                    <td data-label="Control">
                        <div>
                            <a class="btn-on" href="control/unlockStaff/{{$stoff->id}}"><button>Unlock</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@section('title')
   Staff
@endsection

@endsection

@section('linkcss')
    {{asset('css/admin/staff.css')}}
@endsection

@section('linkjs')

@endsection
