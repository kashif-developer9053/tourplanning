@extends('userlayout')

@section('content')
<style>
    .btn {
        display: inline-block;
        margin-top: 0.3rem;
        background: var(--orange);
        color: #fff;
        padding: .3rem 1rem;
        border: .2rem solid var(--orange);
        cursor: pointer;
        font-size: 1rem;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: darkorange;
    }

    .filter h4 {
        text-align: center;
        color: #007bff;
        font-weight: bold;
        margin-bottom: 1.5rem;
    }

    .filter .form-select {
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .filter .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .filter .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .tour-result .card {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .tour-result .card img {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .tour-result .card-body {
        padding: 1rem;
    }

    .tour-result .price {
        font-size: 1.2rem;
        color: #dc3545;
        font-weight: bold;
    }

    .tour-result .btn {
        border-radius: 20px;
    }

    .container {
        max-width: 1200px;
    }
</style>

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-sm-3 filter mt-5">
            <h4 class="text-primary">Result Filter</h4>
            <div class="mb-3">
                <strong>POINT</strong>
                <select class="form-select" form="start" name="start">
                    <option hidden>Select Point</option>
                    <option value="Nha Trang">Nha Trang</option>
                    <option value="Da Nang">Da Nang</option>
                    <option value="Ho Chi Minh">Ho Chi Minh</option>
                    <option value="Ha Noi">Ha Noi</option>
                </select>
                <form action="{{ url('user/tour') }}" id="start">
                    <button class="btn btn-primary mt-2">Search</button>
                </form>
            </div>
            <div class="mb-3">
                <strong>DESTINATION</strong>
                <select class="form-select" form="end" name="end">
                    <option hidden>Select Destination</option>
                    @foreach ($end as $e)
                        <option value="{{ $e->location_name }}">{{ $e->location_name }}</option>
                    @endforeach
                </select>
                <form action="{{ url('user/tour') }}" id="end">
                    <button class="btn btn-primary mt-2">Search</button>
                </form>
            </div>
            <div class="mb-3">
                <strong>REGIONS</strong>
                <select class="form-select" form="regionform" name="region">
                    <option hidden>Select Region</option>
                    <option value="B">Northern</option>
                    <option value="T">Central</option>
                    <option value="N">South</option>
                </select>
                <form action="{{ url('user/tour') }}" id="regionform">
                    <button class="btn btn-primary mt-2">Search</button>
                </form>
            </div>
            <div class="mb-3">
                <strong>NUMBER OF DAYS</strong>
                <div class="d-flex">
                    <form action="{{ url('user/tour') }}">
                        <input type="hidden" name="one" value="one">
                        <button class="btn btn-outline-danger me-2">1-3 days</button>
                    </form>
                    <form action="{{ url('user/tour') }}">
                        <input type="hidden" name="two" value="two">
                        <button class="btn btn-outline-danger">4-7 days</button>
                    </form>
                </div>
            </div>
            <div class="mb-3">
                <strong>DATE START</strong>
                <form class="input-group" action="{{ url('user/tour') }}">
                    <input type="date" class="form-control" name="date" id="date">
                    <button class="btn btn-primary">Search</button>
                </form>
            </div>
            <div class="mb-3">
                <strong>PRICE RANGE</strong>
                <form class="input-group" action="{{ url('user/tour') }}" id="priceRange" onsubmit="return validate()">
                    <input type="number" min="0" id="min" class="form-control" placeholder="Min price" name="min">
                    <input type="number" min="0" id="max" class="form-control" placeholder="Max price" name="max">
                    <button class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
        <div class="col-sm-9 tour-result">
            <div class="row mb-4">
                <div class="col-sm-10">
                    <hr>
                </div>
                <div class="col-sm-2">
                    <form action="{{ url('user/tour') }}" id="price">
                        <select class="form-select mb-2" name="price">
                            <option hidden value="asc">--- SELECT ---</option>
                            <option value="asc">PRICE FROM LOW -> HIGH</option>
                            <option value="desc">PRICE FROM HIGH -> LOW</option>
                        </select>
                        <button class="btn btn-primary btn-sm">Search</button>
                    </form>
                </div>
            </div>
            <div class="row">
                @foreach ($data as $d)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <a href="tourdetail/{{ $d->schedule_id }}">
                                <img class="card-img-top" src="{{ asset('images/' . $d->img1) }}" alt="Tour Image">
                            </a>
                            <div class="card-body">
                                <p>{{ date('d-m-Y', strtotime($d->date_start)) }} - {{ $d->duration }} days</p>
                                <h5>{{ $d->tour_name }}</h5>
                                <p>Tour Code: <strong>{{ $d->tour_code }}</strong></p>
                                <p>Location: <strong>{{ $d->location_start }}</strong></p>
                                <p class="price">{{ $d->price1 }}.00$</p>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ url('user/payment/'.$d->schedule_id) }}">
                                        <button class="btn btn-danger btn-sm">Book Now</button>
                                    </a>
                                    <a href="tourdetail/{{ $d->schedule_id }}">
                                        <button class="btn btn-outline-primary btn-sm">View Detail</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('title', 'Tour')

@section('page-script')
<script>
    const currentDate = new Date().toISOString().split('T')[0];
    document.getElementById("date").value = currentDate;
    document.getElementById("date").setAttribute("min", currentDate);

    function validate() {
        const min = parseInt(document.getElementById("min").value, 10);
        const max = parseInt(document.getElementById("max").value, 10);
        if (min > max) {
            alert('Min price must be less than max price');
            return false;
        }
        return true;
    }
</script>
@endsection
