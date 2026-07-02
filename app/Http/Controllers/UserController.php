<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource (TAMPILKAN SEMUA USER)
     */
    public function index()
    {
        $users = User::all(); // Ambil semua data user dari database
        return view('user.index', compact('users')); // Kirim ke view
    }

    /**
     * Show the form for creating a new resource (TAMPILKAN FORM TAMBAH USER)
     */
    public function create()
    {
        return view('user.create'); // Tampilkan form tambah user
    }

    /**
     * Store a newly created resource in storage (SIMPAN USER BARU)
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        // Simpan ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource (TAMPILKAN DETAIL USER - Opsional)
     */
    public function show(string $id)
    {
        // Tidak kita pakai, tapi boleh diisi
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource (TAMPILKAN FORM EDIT USER)
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id); // Cari user berdasarkan ID
        return view('user.edit', compact('user')); // Kirim ke view edit
    }

    /**
     * Update the specified resource in storage (UPDATE USER)
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id, // Abaikan email sendiri
            'password' => 'nullable|min:8', // Password boleh kosong (tidak diubah)
        ]);

        // Cari user
        $user = User::findOrFail($id);

        // Data yang akan diupdate
        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        // Jika password diisi, update password
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        // Update user
        $user->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'User berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage (HAPUS USER)
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id); // Cari user
        $user->delete(); // Hapus user

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
    }
}