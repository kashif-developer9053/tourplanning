@extends('userlayout')

@section('content')

<style>
    .body-container {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .left-section, .right-section {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        flex: 1;
        min-width: 300px;
    }
    .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
    }
    .form-control:focus {
        border-color: #17a2b8;
        box-shadow: 0 0 5px rgba(23, 162, 184, 0.5);
    }
    .btn-lg {
        border-radius: 8px;
        padding: 10px 20px;
    }
    .text-primary {
        color: #007bff;
    }
    .section-title {
        border-bottom: 2px solid #17a2b8;
        padding-bottom: 5px;
        margin-bottom: 20px;
        font-size: 1.5rem;
    }
    .card {
        border: none;
        border-radius: 8px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    .card-body {
        padding: 15px;
    }
</style>

<div class="container mt-5">
    <div class="body-container">

        <!-- Left Section: Profile Form -->
        <div class="left-section">
            <h2 class="section-title text-primary">User Profile</h2>

            @if (session('msg'))
                <div class="alert alert-success text-center">{{ session('msg') }}</div>
            @endif

            <form action="saveProfile" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ session()->get('id') }}">

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" class="form-control" name="name" placeholder="Enter name" value="{{ session()->get('userName') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter email" value="{{ session()->get('userEmail') }}" readonly>
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                @foreach ($user as $u)
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" id="password" class="form-control" name="pass" placeholder="Enter Password" value="{{ $u->password }}">
                    </div>
                @endforeach

                <div class="form-group mb-3">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" id="address" class="form-control" name="address" placeholder="Enter address" value="{{ session()->get('userAddress') }}">
                    @error('address')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" id="phone" class="form-control" name="phone" placeholder="Enter phone" value="{{ session()->get('userPhone') }}">
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-lg btn-info w-50">Update</button>
                </div>
            </form>
        </div>

        <!-- Right Section: Feedback and Orders -->
        <div class="right-section">
            <h2 class="section-title text-primary">History</h2>

            <!-- Order History -->
            <div class="mb-4">
                <h3 class="text-secondary mb-3">Orders</h3>
                @foreach ($order as $or)
                    <div class="card">
                        <div class="card-body">
                            <h5><strong>Tour Name:</strong> {{ $or->tour_name }}</h5>
                            <h5><strong>Payment:</strong> {{ $or->payment }}</h5>
                            <h5><strong>Amount:</strong> {{ $or->amount }}$</h5>
                            <h5><strong>Date Book:</strong> {{ date('d-m-Y H:i', strtotime($or->date_book)) }}</h5>
                            <h5><strong>Location Start:</strong> {{ $or->location_start }}</h5>
                            <h5><strong>Duration:</strong> {{ $or->duration }} Day(s)</h5>
                            <h5><strong>Tour Code:</strong> {{ $or->tour_code }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Feedback History -->
            <div>
                <h3 class="text-secondary mb-3">Feedback</h3>
                @foreach ($feedback as $f)
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5><strong>Tour Code:</strong> {{ $f->schedule->tour_code }}</h5>
                                <a href="{{ url('user/profile/deleteCmt/' . $f->feedback_id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </div>
                            <h5><strong>Feedback Date:</strong> {{ $f->feedback_date }}</h5>
                            <h5><strong>Title:</strong> {{ $f->subject }}</h5>
                            <h5><strong>Content:</strong> {{ $f->content }}</h5>
                            <h5><strong>Reply:</strong> {{ $f->reply }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('title')
    Profile
@endsection

@section('linkcss')
    <link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@endsection

@section('linkjs')
@endsection
