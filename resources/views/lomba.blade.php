<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Beranda SMPN 17 Semarang</title>
</head>
<body class="h-full bg-gray-100">
<div class="min-h-full">
    <!-- Navbar -->
    <x-navbar></x-navbar>

    <!-- Header -->
    <div>
        <header class="bg-blue-950" style="box-shadow: 0 -5px 25px -5px rgba(36,83,253,0.5);">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white"></h1>
                <h1 class="text-2xl font-bold tracking-tight text-white">Selamat datang di halaman Lomba</h1>
            </div>
        </header>
    </div>


    <!-- Main content -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Your content goes here -->
            <p class="text-gray-700"></p>

            <!-- Box 1: Prestasi -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-xl font-bold text-blue-950 mb-4">Prestasi yang Telah Diraih</h2>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Juara 1 Lomba Matematika Tingkat Kota 2023</li>
                    <li>Juara 2 Lomba Sains Nasional 2023</li>
                    <li>Juara 1 Lomba Debat Bahasa Inggris 2022</li>
                </ul>
            </div>

            <!-- Box 2: Kompetisi -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold text-blue-950 mb-4">Kompetisi yang Sedang Berlangsung</h2>
                <p class="text-gray-700">
                    Saat ini, siswa-siswi SMPN 17 Semarang sedang berpartisipasi dalam Olimpiade Sains Nasional 2024
                    dan Lomba Cerdas Cermat Bahasa Inggris tingkat provinsi.
                </p>
            </div>
        </div>
    </main>
</div>

<!-- footer -->
<x-footer></x-footer>

<script>
    // Dapatkan semua link navigasi
    const links = document.querySelectorAll('.nav-link');

    // Dapatkan URL saat ini
    const currentUrl = window.location.pathname;

    // Loop melalui link dan tambahkan kelas jika URL sesuai
    links.forEach(link => {
        if (link.getAttribute('href') === currentUrl) {
            link.classList.add('bg-blue-950', 'text-white');
        }
    });
</script>

</body>
</html>
