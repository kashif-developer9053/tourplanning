@extends('userlayout')

@section('title', 'AI Assistance Portal')

@section('content')
<div class="container py-5 vh-100">
    <div class="text-center mb-5">
        <h1 class="text-primary" style="font-family: 'Orbitron', sans-serif; font-size: 3rem;padding-top:4rem;">
            <i class="fas fa-brain"></i> Welcome to AI Assistance Portal
        </h1>
        <p class="text-secondary fs-4">Choose your assistant to get started:</p>
    </div>
    <div class="row justify-content-center">
        <!-- Travel Assistant Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg border-0" style="height: 400px;">
                <div class="card-body text-center d-flex flex-column justify-content-between">
                    <div>
                        <i class="fas fa-map-marked-alt text-primary mb-4" style="font-size: 4rem; padding-top: 5rem;"></i>
                        <h4 class="card-title text-primary" style="font-family: 'Orbitron', sans-serif; font-size: 1.8rem;padding-top:2rem;">Travel Assistant</h4>
                        <p class="card-text text-secondary" style="font-size: 2.2rem;padding-top:2rem;">Plan your perfect trip within Pakistan with budget-friendly options and expert advice.</p>
                    </div>
                    <a href="{{ route('ai.travel') }}" class="btn btn-primary w-100 mt-3" style="font-size: 2.2rem; ">Explore Travel Assistant</a>
                </div>
            </div>
        </div>

        <!-- Local Language Assistant Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg border-0" style="height: 400px;">
                <div class="card-body text-center d-flex flex-column justify-content-between">
                    <div>
                        <i class="fas fa-language text-success mb-4" style="font-size: 4rem; padding-top: 5rem;"></i>
                        <h4 class="card-title text-success" style="font-family: 'Orbitron', sans-serif; font-size: 1.8rem;padding-top:2rem;">Local Language Assistant</h4>
                        <p class="card-text text-secondary" style="font-size: 2.2rem;padding-top:2rem;">Get AI responses in Urdu for local language support and assistance.</p>
                    </div>
                    <a href="{{ route('ai.urdu') }}" class="btn btn-success w-100 mt-3" style="font-size: 2.2rem;">Explore Local Assistant</a>
                </div>
            </div>
        </div>

        <!-- General Assistant Card -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow-lg border-0" style="height: 400px;">
                <div class="card-body text-center d-flex flex-column justify-content-between">
                    <div>
                        <i class="fas fa-robot text-danger mb-4" style="font-size: 4rem; padding-top: 5rem;"></i>
                        <h4 class="card-title text-danger" style="font-family: 'Orbitron', sans-serif; font-size: 1.8rem;padding-top:2rem;">General Assistant</h4>
                        <p class="card-text text-secondary" style="font-size: 2.2rem;padding-top:2rem;">Ask anything and get concise, accurate, and helpful responses from AI.</p>
                    </div>
                    <a href="{{ route('ai.general') }}" class="btn btn-danger w-100 mt-3" style="font-size: 2.2rem;">Explore General Assistant</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
