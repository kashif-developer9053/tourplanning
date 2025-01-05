@extends('userlayout')

@section('content')

@if(isset($data) && count($data) > 0)
    @foreach ($data as $d)
        <div class="container my-5">
            <div class="row">
                <!-- Left Side: Form Section -->
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-primary text-white text-center">
                            <h4 class="mb-0" style="font-family: 'Poppins', sans-serif;">Enter Information & Payment</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('user/paymentPost') }}" method="POST" onsubmit="return validateForm()" name="form">
                                @csrf
                                <input type="hidden" name="schedule_id" value="{{ $d->schedule_id }}">
                                <input type="hidden" name="location_start" value="{{ $d->tour->location_start }}">
                                <input type="hidden" name="date_start" value="{{ $d->date_start }}">
                                <input type="hidden" name="date_end" value="{{ $d->date_end }}">
                                <input type="hidden" name="transport" value="{{ $d->tour->transport }}">
                                <input type="hidden" name="duration" value="{{ $d->tour->duration }}">
                                <input type="hidden" name="status" value="{{ $d->status }}">
                                <input type="hidden" name="tour_code" value="{{ $d->tour_code }}">
                                <input type="hidden" name="user_id" value="{{ session('id') }}">
                                <input type="hidden" name="tour_name" value="{{ $d->tour->tour_name }}">
                                <input type="hidden" name="price1" value="{{ $d->tour->price1 }}">
                                <input type="hidden" name="price2" value="{{ $d->tour->price2 }}">
                                <input type="hidden" name="price3" value="{{ $d->tour->price3 }}">
                                <input type="hidden" name="price4" value="{{ $d->tour->price4 }}">

                                <!-- Personal Information -->
                                <div class="mb-4">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ session('userName') }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ session('userEmail') }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" value="{{ session('userPhone') }}" required>
                                </div>
                                <div class="mb-4">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" value="{{ session('userAddress') }}" required>
                                </div>

                                <!-- Passenger Information -->
                                <h5 class="text-primary mb-3">Passenger Information</h5>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="person1" class="form-label">Adults</label>
                                        <input type="number" min="1" class="form-control" id="person1" name="person1" value="1" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="person2" class="form-label">Children</label>
                                        <input type="number" min="0" class="form-control" id="person2" name="person2" value="0" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="person3" class="form-label">Young Children</label>
                                        <input type="number" min="0" class="form-control" id="person3" name="person3" value="0" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="person4" class="form-label">Baby</label>
                                        <input type="number" min="0" class="form-control" id="person4" name="person4" value="0" required>
                                    </div>
                                </div>

                                <!-- Payment Methods -->
                                <h5 class="text-primary mb-3">Payment Method</h5>
                                <div class="form-check mb-2">
                                    <input type="radio" class="form-check-input" id="radio1" name="payment" value="direct" checked>
                                    <label class="form-check-label" for="radio1">Direct Payment</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="radio" class="form-check-input" id="radio2" name="payment" value="card">
                                    <label class="form-check-label" for="radio2">Credit Card Payment</label>
                                </div>
                                <div class="form-check mb-4">
                                    <input type="radio" class="form-check-input" id="radio3" name="payment" value="bank">
                                    <label class="form-check-label" for="radio3">Bank Payment</label>
                                </div>

                                <div class="text-end mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-check-circle"></i> Confirm Booking
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Tour Details -->
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-success text-white text-center">
                            <h4 class="mb-0" style="font-family: 'Poppins', sans-serif;">Tour Details</h4>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('images/' . $d->tour->img1) }}" class="img-fluid rounded mb-3" alt="{{ $d->tour->tour_name }}">
                            <h5 class="text-success mb-3">{{ $d->tour->tour_name }}</h5>
                            <p class="mb-2"><strong>Date Start:</strong> {{ date('d-m-Y', strtotime($d->date_start)) }}</p>
                            <p class="mb-2"><strong>Duration:</strong> {{ $d->tour->duration }} days</p>
                            <p class="mb-2"><strong>Place Start:</strong> {{ $d->tour->location_start }}</p>
                            <p class="mb-2"><strong>Transport:</strong> {{ $d->tour->transport }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('success'))
                <div class="alert alert-success text-center">
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger text-center">
                    <strong>{{ session('error') }}</strong>
                </div>
            @endif
        </div>
    @endforeach
@else
    <div class="container my-5">
        <div class="alert alert-warning text-center">
            <strong>No data available for the selected tour.</strong>
        </div>
    </div>
@endif

<script>
    function validateForm() {
        const paymentOption = document.querySelector('input[name="payment"]:checked').value;

        if (paymentOption === 'bank') {
            window.location.href = "{{ url('user/bankPayment') }}";
            return false; // Prevent form submission for bank payment
        }
        return true; // Allow form submission for other options
    }
</script>
@endsection
