@extends('userlayout')

@section('content')
<div class="container" style="height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div class="row justify-content-center w-100">
        <div class="col-lg-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h2 class="mb-0" style="font-family: 'Poppins', sans-serif; font-size: 2rem;">Bank Payment</h2>
                </div>
                <div class="card-body" style="padding: 2rem;">
                    @if(session('error'))
                        <div class="alert alert-danger text-center">
                            <strong>{{ session('error') }}</strong>
                        </div>
                    @endif
                    <form action="{{ url('user/bankPaymentPost') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="cardNumber" class="form-label" style="font-size: 1.2rem;">Card Number</label>
                            <input type="text" class="form-control form-control-lg" id="cardNumber" name="cardNumber" 
                                   placeholder="Enter your card number" style="font-size: 1.2rem;" required>
                        </div>
                        <div class="mb-4">
                            <label for="expiryDate" class="form-label" style="font-size: 1.2rem;">Expiry Date</label>
                            <input type="text" class="form-control form-control-lg" id="expiryDate" name="expiryDate" 
                                   placeholder="MM/YY" style="font-size: 1.2rem;" required>
                        </div>
                        <div class="mb-4">
                            <label for="cvv" class="form-label" style="font-size: 1.2rem;">CVV</label>
                            <input type="text" class="form-control form-control-lg" id="cvv" name="cvv" 
                                   placeholder="Enter your CVV" style="font-size: 1.2rem;" required>
                        </div>
                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary btn-lg" style="font-size: 1.5rem; padding: 0.8rem 2rem;">
                                <i class="fas fa-credit-card"></i> Submit Payment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
