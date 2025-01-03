@extends('adminlayout')

@section('content')
    
<div class="content">
    <div class="one">
        <div class="search-block">
            <span>Search News name for here</span>
            <form action="">
                <input type="text" name="search">
                <button>Search</i></button>
            </form>
        </div>
        <div class="insert">
            <form action="control/insertNews">
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
                        <h1>News name</h1>
                    </th>
                    <th>
                        <h1>News date</h1>
                    </th>
                    <th>
                        <h1>Control</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $n)
                <tr>
                    <td data-label="ID">{{$n->news_id}}</td>
                    <td data-label="News name">{{$n->news_name}}</td>
                    <td data-label="News name">{{$n->news_date}}</td>
                    <td data-label="Control">
                        <div>
                            <a href="control/updateNews/{{$n->news_id}}"><button>Update</button></a>
                            <a href="control/deleteNews/{{$n->news_id}}"><button>Delete</button></a>
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
    News
@endsection

@section('linkcss')
    {{asset('css/admin/news.css')}}
@endsection

@section('linkjs')

@endsection