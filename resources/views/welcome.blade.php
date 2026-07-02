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
                <a href="/login" 
                   class="px-5 py-2 text-gray-700 hover:text-blue-600 border border-gray-300 rounded-lg hover:border-blue-600 transition">
                    Login
                </a>
                <a href="/register" 
                   class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow-md hover:shadow-lg transition">
                    Register
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-purple-50 pt-16">
        <div class="text-center px-4">
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-4">
                Selamat Datang di
                <span class="text-blue-600">Toko Online</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
                Tugas Praktik Framework Laravel
            </p>

            <!-- Tombol Aksi -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/register" 
                   class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white text-lg font-semibold rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    Mulai Berbelanja
                </a>
                <a href="/login" 
                   class="px-8 py-4 bg-white hover:bg-gray-50 text-gray-700 text-lg font-semibold rounded-xl shadow-md hover:shadow-lg border border-gray-200 transition duration-300">
                    Login
                </a>
            </div>

            <!-- NAMA KAMU -->
            <div class="mt-12 pt-6 border-t border-gray-300">
                <p class="text-gray-500 text-sm">
                    Dibuat oleh <span class="font-semibold text-blue-600">Muhamad Firmansyah</span>
                </p>
            </div>
        </div>
    </section>
</body>
</html>