@extends('adminlayout')

@section('content')

<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search name customer for here</span>
            <form action="customer">
                <input type="text" name="search">
                <button>Search</button>
            </form>
        </div>
    </div>

    @if (session('msg'))
    <div class="msg-block">
        <span class="msg">{{ session('msg') }}</span>
    </div>
    @endif

    <h3 class="on">Active Account</h3>

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
                        <h1>Phone</h1>
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
                @foreach ($customerOn as $on)
                <tr>
                    <td data-label="ID">{{$on->user_id}}</td>
                    <td data-label="Name">{{$on->user_name}}</td>
                    <td data-label="Email">{{$on->email}}</td>
                    <td data-label="Phone">{{$on->phone}}</td>
                    <td data-label="Password">{{$on->password}}</td>
                    <td data-label="Control">
                        <div>
                            <a class="btn-off" href="control/lock/{{$on->user_id}}"><button>Lock</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h3 class="off">Inactive Account</h3>
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
                        <h1>Phone</h1>
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
                @foreach ($customerOff as $off)
                <tr>
                    <td data-label="ID">{{$off->user_id}}</td>
                    <td data-label="Name">{{$off->user_name}}</td>
                    <td data-label="Email">{{$off->email}}</td>
                    <td data-label="Phone">{{$off->phone}}</td>
                    <td data-label="Password">{{$off->password}}</td>
                    <td data-label="Control">
                        <div>
                            <a class="btn-on" href="control/unlock/{{$off->user_id}}"><button>Unlock</button></a>
                            <a class="btn-off" href="control/deleteCustomer/{{$off->user_id}}"><button>Delete</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>

@section('title')
   Customer
@endsection

@endsection

@section('linkcss')
    {{asset('css/admin/customer.css')}}
@endsection

@section('linkjs')

@endsection
