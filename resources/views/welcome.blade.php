<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Laravel - Muhamad Firmansyah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-blue-600">Toko Online</div>
            <div class="space-x-4">
                <a href="{{ url('/login') }}" 
                   class="px-5 py-2 text-gray-700 hover:text-blue-600 border border-gray-300 rounded-lg hover:border-blue-600 transition">
                    Login
                </a>
                <a href="{{ url('/register') }}" 
                   class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow-md hover:shadow-lg transition">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-purple-50 pt-16">
        <div class="text-center px-4">
            <div class="mb-6">
                <span class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold">
                    Tugas Akhir Praktik
                </span>
            </div>

            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-4">
                Selamat Datang di
                <span class="text-blue-600">Toko Online</span>
            </h1>
            
            <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-2">
                Framework Laravel 13
            </p>
            <p class="text-gray-500 max-w-2xl mx-auto mb-8">
                Dibangun sebagai bagian dari tugas praktik mata kuliah Web-based Perogramming
            </p>

            <!-- Tombol Aksi -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/register') }}" 
                   class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white text-lg font-semibold rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    Daftar Sekarang
                </a>
                <a href="{{ url('/login') }}" 
                   class="px-8 py-4 bg-white hover:bg-gray-50 text-gray-700 text-lg font-semibold rounded-xl shadow-md hover:shadow-lg border border-gray-200 transition duration-300">
                    Login
                </a>
            </div>

            <!-- NAMA KAMU -->
            <div class="mt-12 pt-6 border-t border-gray-300">
                <p class="text-gray-500">
                    Dibuat oleh <span class="font-semibold text-blue-600">Muhamad Firmansyah</span>
                </p>
                <p class="text-gray-400 text-sm mt-1">
                    NIM: 11524075 | Sistem Informasi
                </p>
            </div>
        </div>
    </section>
</body>
</html>