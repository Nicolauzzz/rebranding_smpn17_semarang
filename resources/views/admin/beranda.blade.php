<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP Negeri 17 Semarang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-full bg-gray-100">
<div class="min-h-full">
    <!-- Navbar -->
    <x-navbar></x-navbar>

    <!-- Header -->
    <div>
        <header class="bg-blue-950" style="box-shadow: 0 -5px 25px -5px rgba(36,83,253,0.5); ">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white">Selamat Datang di Beranda</h1>
            </div>
        </header>
    </div>


<!-- Main Content -->
    <div class="container mx-auto py-8">
        <div class="text-center my-4">
            <h3 class="text-2xl font-semibold">{{ $content->motto }}</h3>
            <p class="text-gray-700">{{ $content->welcome_message }}</p>
            <img src="{{ $content->image_url }}" alt="SMPN 17 Semarang" class="mx-auto mb-4" width="200">
        </div>

        <main>
            <div class="text-center">
                <img src="{{ $content->school_image_url }}" alt="SMP Negeri 17 Semarang" class="w-full h-auto mb-4">
            </div>
            <div class="mx-auto max-w-7xl px-4 py-2 sm:px-6 lg:px-8">
                <div class="text-center my-4">
                    <img src="{{ $content->principal_image_url }}" alt="Kepala SMPN 17 Semarang" class="mx-auto mb-4" width="200">
                    <h3 class="text-2xl font-semibold mt-20 mb-5">{{ $content->principal_title }}</h3>
                    <p class="mt-2 text-gray-700 text-justify">{{ $content->principal_message_intro }}</p>
                    <p class="mt-2 text-gray-700 text-justify">{{ $content->principal_message_body }}</p>
                    <p class="mt-2 text-gray-700 text-left">{{ $content->principal_message_closing }}</p>
                    <p class="mt-9 font-bold text-left">{{ $content->principal_name }}<br>{{ $content->principal_title_detail }}</p>
                </div>
            </div>
        </main>
    </div>

    <!-- Google Maps -->
    <div id="map" class="w-full h-64 mt-8"></div>
</div>
<!-- Footer -->
<x-footer />

<!-- Navbar highlight script -->
    <script>
        const links = document.querySelectorAll('.nav-link');
        const currentUrl = window.location.pathname;
        links.forEach(link => {
            if (link.getAttribute('href') === currentUrl) {
                link.classList.add('bg-blue-950', 'text-white');
            }
        });
    </script>

<!-- Google Maps Script -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr0jaTibn3kAojSU1pi195RM3ASI_1NoI&callback=initMap">
</script>
<script>
    function initMap() {
        const location = { lat: -7.0285517, lng: 110.4347306 };
        const map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location,
        });
        const marker = new google.maps.Marker({
            position: location,
            map: map,
        });
    }
</script>

</body>
</html>
