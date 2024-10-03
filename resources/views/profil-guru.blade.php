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
    <nav class="bg-white" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-10xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-16 w-auto" src="https://smpn17.semarangkota.go.id/uploads/school_content/logo/front_logo-6325ab2b34ebd5.91395118.png" alt="SMPN 17 Semarang">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-white-950 hover:bg-blue-950 hover:text-white">BERANDA</a>
                            <a href="/profil" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">PROFIL</a>
                            <a href="/galeri" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">GALERI</a>
                            <a href="/prestasi" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">PRESTASI</a>
                            <a href="/perpustakaan" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">PERPUSTAKAAN</a>
                            <a href="/lomba" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white" style="white-space: nowrap;">LOMBA-LOMBA</a>
                            <a href="https://ppd.semarangkota.go.id/" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white" style="white-space: nowrap;">PPDB 2024/2025</a>
                            <a href="/kontak" class="nav-link rounded-md px-3 py-2 text-sm font-medium text-blue-950 hover:bg-blue-950 hover:text-white">KONTAK/PENGADUAN</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button type="button" @click="isOpen = !isOpen"
                                        class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true"
                                        style="margin-left: 10px;">
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
                    <button type="button" @click="isOpen = !isOpen"
                            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Icon for menu open: "block", menu close: "hidden" -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }"
                             class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
                        </svg>
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }"
                             class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <a href="/" class="nav-link block rounded-md px-3 py-2 text-base font-medium text-blue-950 hover:bg-blue-950 hover:text-white">Beranda</a>
                <a href="/profil" class="nav-link block rounded-md px-3 py-2 text-base font-medium text-blue-950 hover:bg-blue-950 hover:text-white">Profil</a>
                <a href="/galeri" class="nav-link block rounded-md px-3 py-2 text-base font-medium text-blue-950 hover:bg-blue-950 hover:text-white">Galeri</a>
                <a href="/prestasi" class="nav-link block rounded-md px-3 py-2 text-base font-medium text-blue-950 hover:bg-blue-950 hover:text-white">Prestasi</a>
                <a href="/perpustakaan" class="nav-link block rounded-md px-3 py-2 text-base font-medium text-blue-950 hover:bg-blue-950 hover:text-white">Perpustakaan</a>
                <a href="/lomba" class="nav-link block rounded-md px-3 py-2 text-base font-medium text-blue-950 hover:bg-blue-950 hover:text-white">Lomba-Lomba</a>
                <a href="/ppdb" class="nav-link block rounded-md px-3 py-2 text-base font-medium text-blue-950 hover:bg-blue-950 hover:text-white">PPDB 2024/2025</a>
                <a href="/kontak" class="nav-link block rounded-md px-3 py-2 text-base font-medium text-blue-950 hover:bg-blue-950 hover:text-white">Kontak & Pengaduan</a>
            </div>
        </div>
    </nav>

    <!-- footer -->


    <!-- Header -->
    <header class="bg-blue-950" style="box-shadow: 0 -5px 25px -5px rgba(36,83,253,0.5);">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">Selamat Datang di Laman Profil Guru dan Tenaga Kependidikan</h1>
        </div>
    </header>

    <nav class="bg-gray-100 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex space-x-4 py-4">
                <a href="/profil" class="text-gray-700 hover:text-blue-850 font-medium">Profil Sekolah</a>
                <a href="/profil-guru" class="text-gray-700 hover:text-blue-700 font-medium">Profil Guru dan Tenaga Kependidikan</a>
                <a href="/profil-siswa" class="text-gray-700 hover:text-blue-700 font-medium">Profil Siswa SMPN 17 Semarang</a>
            </div>
        </div>
    </nav>
</head>
<body class="h-full bg-gray-100">
<div class="min-h-full">
    <!-- Navbar -->




    <!-- Main content -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

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
