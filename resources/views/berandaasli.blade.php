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
    <x-header></x-header>

    <!-- Main content -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-2 sm:px-6 lg:px-8">
            <div class="text-center my-4">
                <img src="https://via.placeholder.com/600x300.png?text=Foto+Sekolah" alt="SMP Negeri 17 Semarang" class="mx-auto mb-4" width="1600">
                <h3 class="text-1 xl font-semibold">Gambar Sekolah SMPN 17 Semarang</h3>
            </div>

            <div class="text-center my-4">
                <img src="https://smpn17.semarangkota.go.id/uploads/gallery/media/196701171998022004.jpg" alt="Kepala SMPN 17 Semarang" class="mx-auto mb-4" width="200">
                <h3 class="text-2xl font-semibold">SAMBUTAN KEPALA SMP NEGERI 17 SEMARANG</h3>
                <p class="mt-4 text-gray-700 text-justify">
                    Assalamu'alaikum Warahmatullahi Wabarakatuh. Salam Sejahtera untuk kita semua.
                    Puji syukur senantiasa kita panjatkan kehadirat Allah SWT yang telah melimpahkan
                    rahmat-Nya kepada kita semua, sehingga SMP Negeri 17 Semarang berhasil meluncurkan
                    website ini. Website ini sebagai sarana informasi SMP Negeri 17 Semarang dalam
                    mempublikasikan perkembangan dan kemajuan-kemajuan yang telah diraih oleh sekolah
                    yang kami banggakan ini.
                </p>
                <p class="mt-4 text-gray-700 text-justify">
                    Diharapkan dengan Website ini, semua dapat mengetahui informasi-informasi terbaru
                    seputar SMP Negeri 17 Semarang. Mengingat demikian cepatnya arus pertukaran informasi
                    melalui internet, maka dengan diluncurkannya website SMP Negeri 17 Semarang ini
                    diharapkan para penjelajah dunia maya dapat mengakses perkembangan pendidikan dan
                    menjalin komunikasi aktif demi kemajuan dan perkembangan SMP Negeri 17 Semarang.
                </p>
                <p class="mt-4 text-gray-700 text-left">
                    Wassalaamu'alaikum Warahmatullahi Wabarakatuh.
                </p>
                <p class="mt-4 font-bold text-left">
                    Kepala SMPN 17 Semarang <br>
                    <br>Heppy Anggaryani Sri Wilujeng, S.Pd. <br>
                </p>

                <!-- Google Maps -->
                <div class="my-6 flex flex-col items-center justify-center">
                    <h3 class="text-xl font-semibold mb-4 text-center"> <br>Lokasi SMP Negeri 17 Semarang</h3>
                    <div id="map" style="height: 450px; width: 100%; max-width : 1100px;  margin:50px auto;"></div>
                </div>
            </div>
        </div>
    </main>
</div>
<footer class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
                Copyright &copy; 2022. All rights reserved.
            </p>
        </div>
    </div>
</footer>

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
