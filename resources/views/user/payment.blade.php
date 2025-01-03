@extends('userlayout')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Complete Your Payment</h2>
    <div class="row">
        <!-- Tour Details -->
        <div class="col-md-6">
            <div class="card shadow">
                <img src="{{ asset('images/' . $data[0]->tour->img1) }}" class="card-img-top" alt="Tour Image">
                <div class="card-body">
                    <h4 class="card-title">{{ $data[0]->tour->tour_name }}</h4>
                    <p><strong>Date Start:</strong> {{ date('d-m-Y', strtotime($data[0]->date_start)) }}</p>
                    <p><strong>Duration:</strong> {{ $data[0]->tour->duration }} days</p>
                    <p><strong>Starting Place:</strong> {{ $data[0]->tour->location_start }}</p>
                </div>
            </div>
        </div>

        <!-- Payment Form -->
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h5 class="text-muted mb-3">Your Information</h5>
                <form action="{{ url('user/paymentPost') }}" method="POST" onsubmit="return validateForm()">
                    @csrf
                    <input type="hidden" name="schedule_id" value="{{ $data[0]->schedule_id }}">
                    <!-- Hidden Fields -->
                    <!-- Add relevant hidden fields from your form -->

                    <!-- User Details -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ session('userName') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ session('userEmail') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ session('userPhone') }}" required>
                    </div>

                    <!-- Payment Options -->
                    <h5 class="text-muted mb-3">Choose Payment Method</h5>
                    <div class="d-flex justify-content-between">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="easypaisa" name="payment" value="easypaisa" checked>
                            <label for="easypaisa" class="form-check-label">
                                <img src="{{ asset('images/easypaisa.png') }}" alt="Easypaisa" width="30">
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="jazzcash" name="payment" value="jazzcash">
                            <label for="jazzcash" class="form-check-label">
                                <img src="{{ asset('images/jazzcash.png') }}" alt="JazzCash" width="50">
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="credit" name="payment" value="credit">
                            <label for="credit" class="form-check-label">
                                <i class="fa fa-credit-card fa-2x"></i>
                            </label>
                        </div>
                    </div>

                    <!-- Payment Note -->
                    <div class="mt-4">
                        <textarea class="form-control" name="notes" rows="4" placeholder="Any additional notes"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Proceed to Pay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include Validation Script -->
<script>
    function validateForm() {
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;

        if (!name || !email || !phone) {
            alert("Please fill out all required fields.");
            return false;
        }
        return true;
    }
</script>
@endsection