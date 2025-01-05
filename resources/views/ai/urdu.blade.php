@extends('userlayout')

@section('title', 'Urdu Assistant')

@section('content')
<div class="container py-5">
    <div class="row vh-100">
        <!-- Left Column: Result -->
        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center bg-light text-center border-end">
            <h2 class="text-success mb-4">
                <i class="fas fa-language"></i> AI Urdu Response
            </h2>
            <div id="result-container" class="w-75">
                <div id="loader" style="display: none;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-3">Fetching Urdu response...</p>
                </div>
                <div class="alert alert-info" id="response" style="font-size: 1.2em; display: none;">
                    Your Urdu response will appear here.
                </div>
            </div>
        </div>

        <!-- Right Column: Form -->
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <div class="card shadow-lg border-0 p-4" style="height: 100%;">
                <h1 class="text-center text-success mb-4" style="padding-top: 10%;">
                    <i class="fas fa-robot"></i> Urdu Assistant
                </h1>
                <form id="urduForm" class="needs-validation">
                    <div class="mb-4">
                        <label for="query" class="form-label fs-5" style="padding-top: 10%;">Enter Your Message:</label>
                        <textarea id="query" class="form-control form-control-lg" rows="5" placeholder="Type your query in Urdu" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-success btn-lg w-100" onclick="handleUrduAssistant()">
                            <i class="fas fa-paper-plane"></i> Get Urdu Response
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    async function handleUrduAssistant() {
        const query = document.getElementById('query').value;

        const prompt = `Provide a response strictly in Urdu script for the following query: "${query}". The response must not include Hindi or Devanagari words or script.`;

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

            const result = response.data.text?.trim() || 'No response generated.';

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
