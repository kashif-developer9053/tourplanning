@extends('userlayout')

@section('content')

<style>
    .container {
        max-width: 1000px;
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
        font-weight: bold;
    }

    .btn-info:hover {
        background-color: #138496;
    }

    .tour-info {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
        margin-bottom: 30px;
    }

    .tour-image {
        border-radius: 15px;
        width: 100%;
        object-fit: cover;
        height: 400px;
    }

    .details-section {
        margin-top: 20px;
    }

    .details-section h4 {
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    .details-list p {
        margin-bottom: 10px;
        font-size: 1.1rem;
        color: #555;
    }

    .price-tag {
        color: #e74c3c;
        font-size: 2rem;
        font-weight: bold;
    }

    .btn-book {
        background-color: #e74c3c;
        color: #fff;
        font-weight: bold;
        border: none;
    }

    .btn-book:hover {
        background-color: #c0392b;
    }
</style>

<div class="container mt-5">
    <a href="{{ url('user/tour') }}" class="btn btn-lg btn-info mb-4">
        << Return to Tours
    </a>
</div>

@foreach ($data as $d)
<div class="container tour-info">
    <!-- Tour Header -->
    <div class="row align-items-center">
        <div class="col-md-8">
            <h3 class="fw-bold">{{ $d->tour->tour_name }}</h3>
            <p class="text-primary"><strong>Code:</strong> {{ $d->tour_code }}</p>
        </div>
        <div class="col-md-4 text-md-end text-center">
            <span class="price-tag">{{ $d->tour->price1 }}.00$</span>
            <div class="mt-2">
                <a href="{{ url('user/payment/'.$d->schedule_id) }}" class="btn btn-book btn-lg">Book Now</a>
            </div>
        </div>
    </div>

    <!-- Tour Image -->
    <div class="row mt-4">
        <div class="col-md-12">
            <img src="{{ asset('images/' . $d->tour->img1) }}" class="tour-image" alt="{{ $d->tour->tour_name }}">
        </div>
    </div>

    <!-- Tour Details -->
    <div class="row details-section">
        <div class="col-md-12">
            <h4>Details</h4>
            <div class="details-list">
                <p><strong>Date Start:</strong> {{ date('d-m-Y H:i', strtotime($d->date_start)) }}</p>
                <p><strong>Duration:</strong> {{ $d->tour->duration }} days</p>
                <p><strong>Location Start:</strong> {{ $d->tour->location_start }}</p>
                <p><strong>Destination:</strong> {{ $d->tour->place }}</p>
                <p><strong>Transport:</strong> {{ $d->tour->transport }}</p>
                <p><strong>Highlights:</strong> {{ $d->tour->visit }}</p>
            </div>
        </div>
    </div>

    <!-- Additional Information -->
    <div class="row details-section">
        <div class="col-md-12">
            <h4>Tour Highlights</h4>
            <textarea class="form-control" rows="5" readonly>{{ $d->tour->detail }}</textarea>
        </div>
    </div>
</div>
@endforeach

@endsection

@section('title', 'Tour Detail')
