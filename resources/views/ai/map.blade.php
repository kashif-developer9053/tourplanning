@extends('userlayout')

@section('title', 'City Map Explorer')

@section('content')
<div class="container py-5 mt-5 vh-100">
    <div class="text-center mb-4">
        <h1 class="text-primary" style="font-family: 'Orbitron', sans-serif; font-size: 3rem;">
            <i class="fas fa-map-marker-alt"></i> City Map Explorer
        </h1>
        <p class="text-secondary fs-4">Discover famous locations in any Pakistani city, including parks, hotels, and attractions.</p>
    </div>
    <div class="row">
        <!-- Search Form -->
        <div class="col-md-4">
            <form id="mapForm" class="p-4 rounded shadow-lg bg-light">
                <h3 class="text-center text-primary mb-4" style="font-family: 'Orbitron', sans-serif;">Search a City</h3>
                <div class="mb-3">
                    <label for="location" class="form-label fs-5">Enter City:</label>
                    <input type="text" id="location" class="form-control form-control-lg" placeholder="E.g., Islamabad, Lahore" required>
                </div>
                <button type="button" class="btn btn-primary btn-lg w-100" onclick="searchCity()">
                    <i class="fas fa-search"></i> Search
                </button>
            </form>
        </div>

        <!-- Map Container -->
        <div class="col-md-8">
            <div id="map" style="width: 100%; height: 500px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"></div>
        </div>
    </div>
</div>

<!-- Leaflet.js Script -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<!-- Custom CSS for Tooltip -->
<style>
    .custom-tooltip {
        background-color: #007bff;
        color: white;
        border-radius: 5px;
        padding: 5px;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
</style>

<script>
    let map;

    // Initialize the map
    function initMap() {
        const pakistan = { lat: 30.3753, lng: 69.3451 }; // Centered on Pakistan
        map = L.map('map').setView([pakistan.lat, pakistan.lng], 6);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    }

    // Search for a city and display famous locations
    async function searchCity() {
        const location = document.getElementById('location').value;
        if (!location) {
            alert('Please enter a city.');
            return;
        }

        try {
            // Geocode the city using Nominatim
            const geoResponse = await fetch(`https://nominatim.openstreetmap.org/search?q=${location},Pakistan&format=json`);
            const geoData = await geoResponse.json();

            if (geoData.length > 0) {
                const lat = geoData[0].lat;
                const lon = geoData[0].lon;

                // Update the map view to the city
                map.setView([lat, lon], 13);

                // Add a marker for the city center
                L.marker([lat, lon])
                    .addTo(map)
                    .bindPopup(`<strong>${location}</strong>`)
                    .openPopup();

                // Find famous locations in the city
                findFamousLocations(lat, lon);
            } else {
                alert('City not found.');
            }
        } catch (error) {
            console.error('Error during city search:', error);
            alert('An error occurred while searching for the city.');
        }
    }

    // Find famous locations in the city using Overpass API
    async function findFamousLocations(lat, lon) {
        const overpassQuery = `
            [out:json];
            (
                node(around:10000, ${lat}, ${lon})["tourism"];
                node(around:10000, ${lat}, ${lon})["amenity"="hotel"];
                node(around:10000, ${lat}, ${lon})["leisure"="park"];
            );
            out body;
        `;

        try {
            const response = await fetch('https://overpass-api.de/api/interpreter', {
                method: 'POST',
                body: overpassQuery,
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            });
            const data = await response.json();

            // Add markers with visible labels
            data.elements.forEach((place) => {
                if (place.lat && place.lon) {
                    const marker = L.marker([place.lat, place.lon]).addTo(map);

                    // Always visible label
                    marker.bindTooltip(place.tags.name || 'Unknown Place', {
                        permanent: true, // Always visible
                        direction: 'top', // Position above marker
                        className: 'custom-tooltip', // Custom CSS class for styling
                    });

                    // Optional: Add a popup with more details
                    marker.bindPopup(`
                        <strong>${place.tags.name || 'Famous Place'}</strong><br>
                        Type: ${place.tags.tourism || place.tags.leisure || place.tags.amenity || 'Unknown'}
                    `);
                }
            });
        } catch (error) {
            console.error('Error during Overpass API call:', error);
            alert('An error occurred while fetching famous locations.');
        }
    }

    // Initialize map on page load
    window.onload = initMap;
</script>
@endsection
