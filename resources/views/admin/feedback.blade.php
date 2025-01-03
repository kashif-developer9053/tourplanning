@extends('adminlayout')

@section('content')

<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search feedback date for here</span>
            <form action="">
                From <input type="date" name="from">
                To <input type="date" name="to">
                <button>Search</i></button>
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

    @if (session('warn'))
    <div class="warn-block">
        <span class="warn">{{ session('warn') }}</span>
    </div>
    @endif



    <div class="table-content">
        <table class="container">
            <thead>
                <tr>
                    <th>
                        <h1>User id</h1>
                    </th>
                    <th>
                        <h1>Schedule id</h1>
                    </th>
                    <th>
                        <h1>Date</h1>
                    </th>
                    <th>
                        <h1>Subject</h1>
                    </th>
                    <th>
                        <h1>Reply</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feed as $f)
                <tr>
                    <td data-label="ID">{{$f->user->user_name}}</td>
                    <td data-label="ID">{{$f->schedule_id}}</td>
                    <td data-label="ID">{{$f->feedback_date}}</td>
                    <td data-label="ID">{{$f->subject}}</td>
                    <td data-label="ID">{{$f->reply}}</td>
                    <td data-label="Control">
                        <div>
                            <a href="control/updateFeedback/{{$f->feedback_id}}"><button>Reply</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h3>Contact</h3>
    <div class="table-content">
        <table class="container">
            <thead>
                <tr>
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
                        <h1>Comment</h1>
                    </th>
                    <th>
                        <h1>Date</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $c)
                <tr>
                    <td data-label="Name">{{$c->name}}</td>
                    <td data-label="Email">{{$c->email}}</td>
                    <td data-label="Phone">{{$c->phone}}</td>
                    <td data-label="Comment">{{$c->comment}}</td>
                    @php
                        $date = strtotime($c->date);
                    @endphp
                    <td data-label="Date">{{date('d-m-y',$date)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection

@section('title')
    Feedback
@endsection

@section('linkcss')
    {{asset('css/admin/feedback.css')}}
@endsection

@section('linkjs')

@endsection
