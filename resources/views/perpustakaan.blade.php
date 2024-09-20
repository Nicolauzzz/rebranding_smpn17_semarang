<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Perpustakaan SMPN 17 Semarang</title>
</head>
<body class="h-full bg-gray-100">
<div class="min-h-full">
    <!-- Navbar -->
    <nav class="bg-green-900">
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
                            <a href="/perpustakaan" class="rounded-md bg-white px-3 py-2 text-sm font-medium text-green-900">PERPUSTAKAAN</a>
                            <a href="/lomba" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300" style="white-space: nowrap;">LOMBA-LOMBA</a>
                            <a href="/lomba" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300" style="white-space: nowrap;">PPDB 2024/2025</a>
                            <a href="/kontak" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">KONTAK</a>
                            <a href="/pengaduan" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PENGADUAN</a>
                            <a href="/berita" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">BERITA</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Notification button -->
                        <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405 1.405C18.605 19.79 17.357 20 16 20H8c-1.357 0-2.605-.21-3.595-.595L3 17h5m7 0v-4c0-1.886-1.268-3.498-3-3.874V9a3 3 0 10-6 0v.126C5.268 9.502 4 11.114 4 13v4"></path>
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&w=256&h=256&q=80" alt="User profile">
                                </button>
                            </div>
                            <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
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
                <a href="/perpustakaan" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Perpustakaan</a>
                <a href="/lomba" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Lomba-Lomba</a>
                <a href="/ppdb" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">PPDB 2024/2025</a>
                <a href="/kontak" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kontak</a>
                <a href="/pengaduan" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pengaduan</a>
                <a href="/berita" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Berita</a>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-1 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Perpustakaan</h1>
        </div>
    </header>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6 lg:px-8">
            <div class="flex gap-x-4">
                <h1 class="text-2xl font-bold text-green-900 hover:text-green-700">
                    <a href="https://kubuku.id/download/e-jitu-library/">E-JITU LIBRARY SMPN 17 Semarang</a>
                </h1>
                <h1 class="text-2xl font-bold text-green-900 hover:text-green-700">
                    <a href="https://sibooky.semarangkota.go.id/">Si Booky</a>
                </h1>
            </div>
        </div>
    </header>


    <!-- Main content -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Content -->
            <p class="text-gray-700 mt-4">Selamat datang di laman perpustakaan SMP Negeri 17 Semarang. Di sini, Anda dapat menemukan berbagai koleksi buku yang tersedia untuk siswa dan guru.</p>
            <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Buku 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Koleksi Buku Fiksi</h3>
                        <p class="text-gray-600 mt-2">Kumpulan buku cerita fiksi terbaik yang dapat menginspirasi imajinasi siswa.</p>
                    </div>
                </div>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Buku 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Koleksi Buku Non-Fiksi</h3>
                        <p class="text-gray-600 mt-2">Buku-buku pengetahuan umum, sejarah, dan biografi untuk memperluas wawasan.</p>
                    </div>
                </div>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Buku 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Koleksi Buku Pelajaran</h3>
                        <p class="text-gray-600 mt-2">Buku-buku pelajaran yang disusun sesuai kurikulum untuk membantu proses belajar siswa.</p>
                    </div>
                </div>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Buku 4" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Koleksi Buku Referensi</h3>
                        <p class="text-gray-600 mt-2">Buku-buku referensi untuk keperluan penelitian dan tugas akademik siswa.</p>
                    </div>
                </div>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Buku 5" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Koleksi Majalah & Jurnal</h3>
                        <p class="text-gray-600 mt-2">Berbagai majalah dan jurnal yang berisi informasi terkini dalam berbagai bidang ilmu.</p>
                    </div>
                </div>
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <img src="https://via.placeholder.com/300" alt="Buku 6" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900">Koleksi Digital</h3>
                        <p class="text-gray-600 mt-2">Akses koleksi buku digital yang dapat diakses secara online oleh siswa dan guru.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
