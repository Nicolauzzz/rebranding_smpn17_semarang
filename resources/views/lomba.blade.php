<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Lomba-Lomba SMPN 17 Semarang</title>
    <style>
        .marquee {
            width: 100%;
            background-color: #f3f4f6;
            color: #1f2937;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #d1d5db;
            overflow: hidden;
            white-space: nowrap;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .marquee p {
            display: inline-block;
            /* Posisi awal teks di luar layar di sebelah kanan */
            position: absolute;
            left: 100%;
            /* Mengatur lebar konten teks jika diperlukan */
            width: 100%;
            /* Animasi berjalan */
            animation: marquee 15s linear infinite;
        }

        /* Animasi berjalan dari kanan ke kiri */
        @keyframes marquee {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body class="h-full bg-gray-100">
<div class="min-h-full">
    <!-- Navbar -->
    <nav class="bg-white" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-16 w-auto" src="https://smpn17.semarangkota.go.id/uploads/school_content/logo/front_logo-6325ab2b34ebd5.91395118.png" alt="SMPN 17 Semarang">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">BERANDA</a>
                            <a href="/profil" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PROFIL</a>
                            <a href="/galeri" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">GALERI</a>
                            <a href="/prestasi" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PRESTASI</a>
                            <a href="/perpustakaan" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PERPUSTAKAAN</a>
                            <a href="/lomba" class="rounded-md bg-white px-7 py-1 text-sm font-medium text-green-900" style="white-space: nowrap;">LOMBA-LOMBA</a>
                            <a href="/ppdb" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300" style="white-space: nowrap;">PPDB 2024/2025</a>
                            <a href="/kontak" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">KONTAK</a>
                            <a href="/pengaduan" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PENGADUAN</a>
                            <a href="/berita" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">BERITA</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center">
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
                <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Beranda</a>
                <a href="/profil" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Profil</a>
                <a href="/galeri" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Galeri</a>
                <a href="/prestasi" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Prestasi</a>
                <a href="/perpustakaan" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Perpustakaan</a>
                <a href="/lomba" class="block rounded-md bg-gray-900 px-7 py-1 text-base font-medium text-white">Lomba-Lomba</a>
                <a href="/ppdb" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PPDB 2024/2025</a>
                <a href="/kontak" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kontak</a>
                <a href="/pengaduan" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pengaduan</a>
                <a href="/berita" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Berita</a>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-blue-950" style="box-shadow: 0 -5px 25px -5px rgba(36,83,253,0.5);">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-white">Lomba-Lomba</h1>
        </div>
    </header>

    <!-- Main content -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Kotak dengan animasi teks berjalan -->
            <div class="marquee">
                <p>Informasi mengenai lomba-lomba yang diikuti oleh SMP Negeri 17 Semarang akan ditampilkan di sini.</p>
            </div>
        </div>
    </main>
</div>
</body>
</html>
