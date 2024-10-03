<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Profil SMPN 17 Semarang</title>
</head>
<body class="h-full bg-gray-100">
<div class="min-h-full">
    <!-- Navbar -->

    <x-navbar></x-navbar>
    <x-header></x-header>
    <x-sub-navbar></x-sub-navbar>

    <!-- Main content -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <!-- Visi -->
                <div class="border border-gray-300 rounded-lg p-6 shadow-lg bg-white">
                    <h2 class="text-2xl font-bold text-blue-950">Visi</h2>
                    <p class="mt-4 text-gray-700">
                        <!-- Isi visi di sini -->
                        "Terwujudnya Sekolah HEBAT (Harus bErsama Bergerak Atasi Tantangan) Menuju Profil Pelajar Pancasila"
                    </p>
                </div>

                <!-- Misi -->
                <div class="border border-gray-300 rounded-lg p-6 shadow-lg bg-white">
                    <h2 class="text-2xl font-bold text-blue-950">Misi</h2>
                    <ul class="mt-4 text-gray-700 list-disc pl-5">
                        <!-- Isi misi di sini -->
                        <li>1. Melaksanakan proses pembelajaran secara efektif, berlandaskan filosofis Ki Hajar Dewantara;</li>
                        <li>2. Melaksanakan bimbingan secara intensif agar peserta didik memiliki kemampuan berfikir dan bersikap lokal, namun siap berkompetisi secara global;</li>
                        <li>3. Menanamkan nilai-nilai religius dan karakter pada peserta didik dalam setiap proses pembelajaran;</li>
                        <li>4. Menciptakan budaya sekolah yang santun, penuh rasa kekeluargaan dan berwawasan lingkungan;</li>
                        <li>5. Mengutamakan kekuatan Inquiry, Apresiatif dalam setiap pengambilan keputusan dan atau melaksanakan</li>
                    </ul>
                </div>

            </div>
        </div>
    </main>
</div>

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
