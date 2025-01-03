@extends('adminlayout')

@section('content')

<div class="content">
    <div class="one">
        <div class="search-name">
            <span>Search name for here</span>
            <form action="order">
                <input type="text" name="search">
                <button>Search</button>
            </form>
        </div>
        <div class="search-date">
            <span>Search date for here</span>
            <form action="order">
                From <input type="date" name="from">
                To <input type="date" name="to">
                <button>Search</button>
            </form>
        </div>
    </div>
    @if ($errors->any())
    <div style="color: red;width:100%;margin-left:50%"> Input is wrong, please try again ! </div>
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

    <h3 class="confirm">Order Confirmed</h3>

    <div class="table-content">
        <table class="container">
            <thead>
                <tr>
                    <th>
                        <h1>Id</h1>
                    </th>
                    <th>
                        <h1>Tour code</h1>
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
                        <h1>Date book</h1>
                    </th>
                    <th>
                        <h1>Amount</h1>
                    </th>
                    <th>
                        <h1>Payment</h1>
                    </th>
                    <th>
                        <h1>Status</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($orderOn as $on)
                <tr>
                    <td data-label="Schedule id">{{$on->schedule_id}}</td>
                    <td data-label="Tour code">{{$on->tour_code}}</td>
                    <td data-label="User name">{{$on->user_name}}</td>
                    <td data-label="Email">{{$on->email}}</td>
                    <td data-label="Email">{{$on->phone}}</td>
                    @php
                    $d=strtotime($on->date_book);
                    @endphp
                    <td data-label="Date book">{{date("d-m-Y H:i", $d)}}</td>
                    <td data-label="Amount">{{$on->amount}}$</td>
                    <td data-label="Payment">{{$on->payment}}</td>
                    <td data-label="Status"><span style="color: rgb(27, 191, 27)">On</span></td>
                    <td data-label="Control">
                        <div>
                            <a class="btn-cancel" href="control/changeOff/{{$on->book_id}}"><button>Cancel</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h3 class="unconfirm">Order Unconfimred</h3>

    <div class="table-content">
        <table class="container">
            <thead>
                <tr>
                    <th>
                        <h1>Id</h1>
                    </th>
                    <th>
                        <h1>Tour code</h1>
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
                        <h1>Date book</h1>
                    </th>
                    <th>
                        <h1>Amount</h1>
                    </th>
                    <th>
                        <h1>Payment</h1>
                    </th>
                    <th>
                        <h1>Status</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($orderOff as $off)
                <tr>
                    <td data-label="Schedule id">{{$off->schedule_id}}</td>
                    <td data-label="Tour code">{{$off->tour_code}}</td>
                    <td data-label="user name">{{$off->user_name}}</td>
                    <td data-label="Email">{{$off->email}}</td>
                    <td data-label="Phone">{{$off->phone}}</td>
                    @php
                    $d=strtotime($off->date_book);
                    @endphp
                    <td data-label="Date book">{{date("d-m-Y H:i", $d)}}</td>
                    <td data-label="Amount">{{$off->amount}}$</td>
                    <td data-label="Payment">{{$off->payment}}</td>
                    <td data-label="Status"><span style="color: rgb(243, 50, 50)">Off</span></td>
                    <td data-label="Control">
                        <div>
                            <a class="btn-confirm" href="control/changeOn/{{$off->book_id}}"><button>Confirm</button></a>
                            @if (session('role') == 0)

                            @else
                            <a class="btn-cancel" href="{{url('admin/control/deleteOrder/'.$off->book_id)}}"><button>Delete</button></a>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@section('title')
   Order
@endsection

@endsection

@section('linkcss')
    {{asset('css/admin/order.css')}}
@endsection

@section('linkjs')

@endsection
