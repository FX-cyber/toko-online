<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tambah Mahasiswa
            </h2>
            <a href="{{ route('mahasiswa.index') }}" 
               class="text-gray-600 hover:text-gray-900 text-sm">
                &larr; Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-8">
                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- NIM -->
                            <div>
                                <label for="nim" class="block text-sm font-medium text-gray-700 mb-1">
                                    NIM <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="nim"
                                       name="nim" 
                                       value="{{ old('nim') }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                       placeholder="Contoh: 202401001"
                                       required>
                                @error('nim')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Nama -->
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">
                                    Nama Lengkap <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="nama"
                                       name="nama" 
                                       value="{{ old('nama') }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                       placeholder="Contoh: Ahmad Fauzi"
                                       required>
                                @error('nama')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Jurusan -->
                            <div>
                                <label for="jurusan" class="block text-sm font-medium text-gray-700 mb-1">
                                    Jurusan <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="jurusan"
                                       name="jurusan" 
                                       value="{{ old('jurusan') }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                       placeholder="Contoh: Teknik Informatika"
                                       required>
                                @error('jurusan')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Angkatan -->
                            <div>
                                <label for="angkatan" class="block text-sm font-medium text-gray-700 mb-1">
                                    Angkatan <span class="text-red-500">*</span>
                                </label>
                                <input type="number" 
                                       id="angkatan"
                                       name="angkatan" 
                                       value="{{ old('angkatan') }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                       placeholder="Contoh: 2024"
                                       min="2000"
                                       max="2099"
                                       required>
                                @error('angkatan')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="md:col-span-2">
                                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">
                                    Alamat
                                </label>
                                <textarea id="alamat" 
                                          name="alamat" 
                                          rows="3"
                                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                          placeholder="Contoh: Jl. Mawar No. 1, Jakarta">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- No HP -->
                            <div class="md:col-span-2">
                                <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-1">
                                    Nomor HP
                                </label>
                                <input type="text" 
                                       id="no_hp"
                                       name="no_hp" 
                                       value="{{ old('no_hp') }}"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                       placeholder="Contoh: 081234567890">
                                @error('no_hp')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="mt-8 flex justify-end gap-3 border-t pt-6">
                            <a href="{{ route('mahasiswa.index') }}" 
                               class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                                Batal
                            </a>
                            <button type="submit" 
                                    class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition shadow-sm">
                                Simpan Mahasiswa
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>