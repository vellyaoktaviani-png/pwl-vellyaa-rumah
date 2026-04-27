<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Tampilkan daftar jurusan.
     */
    public function index()
    {
        $jurusans = Jurusan::latest()->paginate(10);

        return view('jurusan.index', compact('jurusans'));
    }

    /**
     * Tampilkan form tambah jurusan.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Simpan data jurusan baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jurusan' => 'required|min:3',
            'kode_jurusan' => 'required|unique:jurusans,kode_jurusan',
        ]);

        Jurusan::create($request->all());

        return redirect()->route('jurusan.index')
            ->with('success', 'Jurusan berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit jurusan.
     */
    public function edit(Jurusan $jurusan)
    {
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update data jurusan di database.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $request->validate([
            'nama_jurusan' => 'required|min:3',
            'kode_jurusan' => 'required|unique:jurusans,kode_jurusan,'.$jurusan->id,
        ]);

        $jurusan->update($request->all());

        return redirect()->route('jurusan.index')
            ->with('success', 'Data jurusan berhasil diperbarui!');
    }

    /**
     * Hapus data jurusan.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        return redirect()->route('jurusan.index')
            ->with('success', 'Jurusan berhasil dihapus!');
    }

    // Fungsi show dikosongkan jika tidak digunakan
    public function show(Jurusan $jurusan)
    {
        //
    }
}
