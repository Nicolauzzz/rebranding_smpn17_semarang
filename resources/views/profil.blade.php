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
    <nav class="bg-white" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-10xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-16 w-auto" src="https://smpn17.semarangkota.go.id/uploads/school_content/logo/front_logo-6325ab2b34ebd5.91395118.png" alt="SMPN 17 Semarang">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/" class="rounded-md px-3 py-2 text-sm font-medium hover:bg-blue-950 hover:text-white">BERANDA</a>
                            <a href="/profil" class="rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">PROFIL</a>
                            <a href="/galeri" class="rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">GALERI</a>
                            <a href="/prestasi" class="rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">PRESTASI</a>
                            <a href="/perpustakaan" class="rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">PERPUSTAKAAN</a>
                            <a href="/lomba" class="rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white" style="white-space: nowrap;">LOMBA-LOMBA</a>
                            <a href="https://ppd.semarangkota.go.id/" class="rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white" style="white-space: nowrap;">PPDB 2024/2025</a>
                            <a href="/kontak" class="rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">KONTAK</a>
                            <a href="/pengaduan" class="rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">PENGADUAN</a>
                            <a href="/berita" class="rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">BERITA</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button type="button" @click="isOpen = !isOpen"
                                        class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&w=256&h=256&q=80" alt="User profile">
                                </button>
                            </div>
                            <div  x-show="isOpen"
                                  x-transition:enter="transition ease-out duration-100 transform"
                                  x-transition:enter-start="opacity-0 scale-95"
                                  x-transition:enter-end="opacity-100 scale-100"
                                  x-transition:leave="transition ease-in duration-75 transform"
                                  x-transition:leave-start="opacity-100 scale-100"
                                  x-transition:leave-end="opacity-0 scale-95"
                                  class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon for menu open: "block", menu close: "hidden" -->
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <a href="/" class="block rounded-md px-3 py-2 text-base font-medium hover:bg-blue-950 text-white">Beranda</a>
                <a href="/profil" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-950 hover:text-white">Profil</a>
                <a href="/galeri" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-950 hover:text-white">Galeri</a>
                <a href="/prestasi" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-950 hover:text-white">Prestasi</a>
                <a href="/perpustakaan" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-950 hover:text-white">Perpustakaan</a>
                <a href="/lomba" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-950 hover:text-white">Lomba-Lomba</a>
                <a href="/ppdb" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-950 hover:text-white">PPDB 2024/2025</a>
                <a href="/kontak" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-950 hover:text-white">Kontak</a>
                <a href="/pengaduan" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-950 hover:text-white">Pengaduan</a>
                <a href="/berita" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-blue-950 hover:text-white">Berita</a>
            </div>
        </div>
    </nav>

    <!-- footer -->


    <!-- Header -->
    <header class="bg-blue-950" style="box-shadow: 0 -5px 25px -5px rgba(36,83,253,0.5);">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">Profil</h1>
        </div>
    </header>


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
<footer    class="bg-gray-50">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div class="flex justify-center text-teal-600 sm:justify-start">
                <svg class="h-8" viewBox="0 0 118 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                </svg>
            </div>

            <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
                Copyright &copy; 2022. All rights reserved.
            </p>
        </div>
    </div>
</footer>
</body>
</html>
