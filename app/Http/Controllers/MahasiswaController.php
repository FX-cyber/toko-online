<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource. (TAMPILKAN SEMUA DATA)
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource. (TAMPILKAN FORM TAMBAH)
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage. (SIMPAN DATA BARU)
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nim' => 'required|unique:mahasiswas|max:20',
            'nama' => 'required|max:100',
            'jurusan' => 'required|max:50',
            'angkatan' => 'required|integer|min:2000|max:2099',
            'alamat' => 'nullable|max:255',
            'no_hp' => 'nullable|max:15',
        ]);

        // Simpan ke database
        Mahasiswa::create($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource. (TAMPILKAN DETAIL - Opsional)
     */
    public function show(string $id)
    {
        // Tidak kita pakai, tapi boleh diisi
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource. (TAMPILKAN FORM EDIT)
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage. (UPDATE DATA)
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        $request->validate([
            'nim' => 'required|max:20|unique:mahasiswas,nim,' . $id,
            'nama' => 'required|max:100',
            'jurusan' => 'required|max:50',
            'angkatan' => 'required|integer|min:2000|max:2099',
            'alamat' => 'nullable|max:255',
            'no_hp' => 'nullable|max:15',
        ]);

        // Cari data dan update
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Mahasiswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage. (HAPUS DATA)
     */
    public function destroy(string $id)
    {
        // Cari data dan hapus
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Mahasiswa berhasil dihapus!');
    }
}