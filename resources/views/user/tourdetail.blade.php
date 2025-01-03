@extends('userlayout')

@section('content')

<style>
    .container {
        max-width: 1200px;
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
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 30px;
    }
    .tour-image {
        border-radius: 10px;
        object-fit: cover;
        width: 100%;
    }
    .details-box, .feedback-box {
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    .feedback-section {
        margin-top: 30px;
    }
    .feedback-card {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    .schedule-box {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container mt-5">
    <a href="{{ url('user/tour') }}" class="btn btn-lg btn-info mb-3">
        << Return Tour
    </a>
</div>

@foreach ($data as $d)
<div class="container tour-info">
    <!-- Tour Header -->
    <div class="row align-items-center mb-4">
        <div class="col-md-8">
            <h3 class="fw-bold">{{ $d->tour->tour_name }}</h3>
            <p class="text-primary"><strong>Code:</strong> {{ $d->tour_code }}</p>
        </div>
        <div class="col-md-4 text-md-end text-center">
            <span class="text-danger fs-4 fw-bold">{{ $d->tour->price1 }}.00$</span> /guest
            <div class="mt-2">
                <a href="{{ url('user/payment/'.$d->schedule_id) }}" class="btn btn-danger btn-lg">Book Now</a>
                <a href="{{ url('user/contact') }}" class="btn btn-outline-primary btn-lg">Contact</a>
            </div>
        </div>
    </div>

    <!-- Tour Images -->
    <div class="row">
        <div class="col-md-7">
            <img src="{{ asset('images/' . $d->tour->img2) }}" class="tour-image" alt="Main Image">
        </div>
        <div class="col-md-5">
            <div class="row g-3">
                <div class="col-6">
                    <img src="{{ asset('images/' . $d->tour->img3) }}" class="tour-image" alt="Image 1">
                </div>
                <div class="col-6">
                    <img src="{{ asset('images/' . $d->tour->img4) }}" class="tour-image" alt="Image 2">
                </div>
                <div class="col-12 mt-3">
                    <img src="{{ asset('images/' . $d->tour->img5) }}" class="tour-image" alt="Image 3">
                </div>
            </div>
        </div>
    </div>

    <!-- Tour Details -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="details-box">
                <h5>Details:</h5>
                <textarea class="form-control" rows="4" readonly>{{ $d->tour->detail }}</textarea>
                <p class="mt-3"><strong>Date Start:</strong> {{ date('d-m-Y H:i', strtotime($d->date_start)) }}</p>
                <p><strong>Duration:</strong> {{ $d->tour->duration }} days</p>
                <p><strong>Location Start:</strong> {{ $d->tour->location_start }}</p>
                <p><strong>Destination:</strong> {{ $d->tour->place }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="details-box">
                <div class="row">
                    <div class="col-6">
                        <p><strong class="text-danger">Duration:</strong> {{ $d->tour->duration }} days</p>
                        <p><strong class="text-danger">Transport:</strong> {{ $d->tour->transport }}</p>
                    </div>
                    <div class="col-6">
                        <p><strong class="text-danger">Food:</strong> According to the menu</p>
                        <p><strong class="text-danger">Hotel:</strong> 4 stars</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <p><strong class="text-danger">Tour Guide:</strong> {{ $d->tour_guide->name }}</p>
                    </div>
                    <div class="col-6">
                        <p><strong class="text-danger">Ideal Time:</strong> Year-round</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($data as $d)
<div class="container mt-4 section-box">
    <!-- Feedback and Schedule Section -->
    <div class="row">
        <!-- Feedback Section -->
        <div class="col-md-6">
            <h4 class="section-header">Feedback</h4>
            @foreach ($feedback as $f)
                <div class="feedback-card">
                    <div class="d-flex justify-content-between">
                        <strong class="text-primary">{{ $f->user->user_name }}</strong>
                        <small class="text-muted">{{ date('d-m-Y H:i', strtotime($f->feedback_date)) }}</small>
                    </div>
                    <p class="mt-2">{{ $f->content }}</p>
                    @if ($f->reply)
                        <div class="feedback-reply">
                            <strong class="text-danger">Staff Reply:</strong>
                            <p>{{ $f->reply }}</p>
                        </div>
                    @endif
                </div>
            @endforeach

            @if (session('userName'))
                <div class="feedback-card">
                    <strong class="text-primary">{{ session('userName') }} (Me)</strong>
                    <form action="{{ url('user/tour/detailtour/feedback') }}" method="POST" onsubmit="return validateForm()">
                        @csrf
                        <input type="hidden" value="{{ session('id') }}" name="user_id">
                        <input type="hidden" value="{{ $d->schedule_id }}" name="schedule_id">
                        <div class="form-group mt-3">
                            <label for="subject" class="font-weight-bold">Title</label>
                            <input type="text" class="form-control shadow-sm" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="content" class="font-weight-bold">Feedback</label>
                            <textarea class="form-control shadow-sm" id="content" name="content" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-gradient-orange btn-block shadow-lg">Post Feedback</button>
                    </form>
                </div>
            @endif
        </div>

        <!-- Schedule Section -->
        <div class="col-md-6">
            <h4 class="section-header">Schedule</h4>
            <div class="section-box">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Type of Guest</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Adults (12+ years)</td>
                            <td class="text-danger">{{ $d->tour->price1 }}.00$</td>
                        </tr>
                        <tr>
                            <td>Children (5-11 years)</td>
                            <td class="text-danger">{{ $d->tour->price2 }}.00$</td>
                        </tr>
                        <tr>
                            <td>Young Children (2-4 years)</td>
                            <td class="text-danger">{{ $d->tour->price3 }}.00$</td>
                        </tr>
                        <tr>
                            <td>Babies (Under 2 years)</td>
                            <td class="text-danger">{{ $d->tour->price4 }}.00$</td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-4"><strong>Tour Highlights:</strong> {{ $d->tour->visit }}</p>
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection

@section('title', 'Tour Detail')
