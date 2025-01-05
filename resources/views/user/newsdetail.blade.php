@extends('userlayout')

@section('content')
<div class="container mt-5 mb-5 pt-5">
    <div class="row">
        <!-- Main News Section -->
        <div class="col-lg-8">
            @foreach ($news as $n)
            <div class="card mb-5 shadow-lg border-0">
                <img class="card-img-top rounded-top" src="{{ asset('images/'.$n->img2) }}" alt="{{ $n->news_name }}">
                <div class="card-body p-4">
                    <h2 class="card-title text-primary" style="font-family: 'Poppins', sans-serif; font-size: 2.5rem;">
                        {{ $n->news_name }}
                    </h2>
                    <p class="text-muted mb-3" style="font-size: 1rem;">
                        <strong>Travel News:</strong> {{ date("d-m-Y", strtotime($n->news_date)) }}
                    </p>
                    <p class="card-text text-dark" style="font-size: 1.2rem; line-height: 1.8;">
                        {{ $n->newstitle }}
                    </p>
                    <p class="card-text text-dark" style="font-size: 1.2rem; line-height: 1.8;">
                        {{ $n->news_content }}
                    </p>
                    <div class="text-center my-4">
                        <img class="img-fluid rounded shadow" src="{{ asset('images/'.$n->img3) }}" alt="News Image">
                    </div>
                    <p class="card-text text-dark" style="font-size: 1.2rem; line-height: 1.8;">
                        {{ $n->content2 }}
                    </p>
                    <hr>
                    <div class="text-muted">
                        <strong>Travel Company: TOURVIET</strong><br>
                        590 CMT8 Ward 11, District 3, Ho Chi Minh City<br>
                        Tel: (028) 3822 8898 | Hotline: 1900 1839<br>
                        Fanpage: <a href="https://www.fb.com/tourviet" target="_blank" class="text-primary">https://www.fb.com/tourviet</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Related Tours Section -->
        <div class="col-lg-4">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <h3 class="text-primary mb-4" style="font-family: 'Poppins', sans-serif;">Related Tours</h3>
                    @foreach ($news2 as $n2)
                    <div class="card mb-4 shadow-sm border-0">
                        <div class="row g-0">
                            <div class="col-4">
                                <a href="{{ url('user/newsdetail/'.$n2->news_id) }}">
                                    <img class="img-fluid rounded-start" src="{{ asset('images/'.$n2->img1) }}" alt="Related Tour Image">
                                </a>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title text-danger" style="font-family: 'Poppins', sans-serif; font-size: 1.2rem;">{{ $n2->news_name }}</h5>
                                    <p class="card-text text-muted small">{{ $n2->news_date }}</p>
                                    <a href="{{ url('user/newsdetail/'.$n2->news_id) }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('title')
    News
@endsection

@section('linkcss')
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Poppins', sans-serif;
    }

    .card-title {
        font-weight: 600;
    }

    .text-primary {
        color: #0d6efd !important;
    }

    .card {
        border-radius: 12px;
        overflow: hidden;
    }

    .shadow-lg {
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
    }

    .img-fluid {
        border-radius: 10px;
    }

    .card-body {
        padding: 1.5rem;
    }

    .stretched-link {
        position: relative;
    }

    .card-img-top {
        max-height: 300px;
        object-fit: cover;
    }
</style>
@endsection
