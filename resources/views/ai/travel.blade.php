@extends('userlayout')

@section('title', 'Travel Assistant')

@section('content')
<div class="container py-5">
    <div class="row vh-100">
        <!-- Left Column: Result -->
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-light text-center border-end">
            <h2 class="text-primary mb-4">
                <i class="fas fa-map-marked-alt"></i> Your Travel Plan
            </h2>
            <div id="result-container" class="w-75">
                <div id="loader" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-3">Fetching travel advice...</p>
                </div>
                <div class="alert alert-info" id="response" style="font-size: 1.2em; display: none;">
                    Your travel advice will appear here.
                </div>
            </div>
        </div>

        <!-- Right Column: Form -->
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <div class="card shadow-lg border-0 p-4 " style="height:100%;">
                <h1 class="text-center text-primary mb-4" style=" padding-top:10%;">
                    <i class="fas fa-robot"></i> Travel Assistant
                </h1>
                <form id="travelForm" class="needs-validation">
                    <div class="mb-4">
                        <label for="budget" class="form-label fs-5" style=" padding-top:10%;">Budget (PKR):</label>
                        <input type="number" id="budget" class="form-control form-control-lg" placeholder="Enter your budget" required>
                    </div>

                    <div class="mb-4">
                        <label for="interests" class="form-label fs-5">Interests:</label>
                        <input type="text" id="interests" class="form-control form-control-lg" placeholder="E.g., mountains, beaches" required>
                    </div>

                    <div class="mb-4">
                        <label for="travel_time" class="form-label fs-5">Travel Time (days):</label>
                        <input type="number" id="travel_time" class="form-control form-control-lg" placeholder="Number of days" required>
                    </div>

                    <div class="text-center">
                        <button type="button" class="btn btn-primary btn-lg w-100" onclick="handleTravelAssistant()">
                            <i class="fas fa-paper-plane"></i> Get Travel Advice
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    async function handleTravelAssistant() {
        const budget = document.getElementById('budget').value;
        const interests = document.getElementById('interests').value;
        const travelTime = document.getElementById('travel_time').value;

        const prompt = `Suggest affordable travel destinations in Pakistan within a budget of ${budget} PKR for ${travelTime} days. Focus on ${interests}. Keep the response concise and include practical packing tips.`;

        const loader = document.getElementById('loader');
        const responseContainer = document.getElementById('response');

        // Show the loader and hide response
        loader.style.display = 'block';
        responseContainer.style.display = 'none';

        try {
            const response = await axios.post('https://api.cohere.ai/generate', {
                model: 'command-xlarge-nightly',
                prompt: prompt,
                max_tokens: 300,
                temperature: 0.7,
            }, {
                headers: {
                    Authorization: `Bearer {{ env('COHERE_API_KEY') }}`,
                    'Content-Type': 'application/json',
                },
            });

            const result = response.data.text?.trim() || 'No relevant response generated.';

            // Hide the loader and show response
            loader.style.display = 'none';
            responseContainer.innerText = result;
            responseContainer.style.display = 'block';
        } catch (error) {
            console.error('Error during API call:', error.message);

            // Hide the loader and show error
            loader.style.display = 'none';
            responseContainer.innerText = `Error: ${error.message}`;
            responseContainer.style.display = 'block';
        }
    }
</script>
@endsection
