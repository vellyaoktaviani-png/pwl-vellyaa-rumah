<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah; // Memanggil Model MataKuliah
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Menampilkan daftar mata kuliah.
     */
    public function index()
    {
        $mata_kuliahs = MataKuliah::latest()->get();

        return view('mata_kuliah.index', compact('mata_kuliahs'));
    }

    /**
     * Menampilkan form untuk tambah mata kuliah.
     */
    public function create()
    {
        return view('mata_kuliah.create');
    }

    /**
     * Menyimpan data mata kuliah baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk',
            'nama_mk' => 'required',
            'sks' => 'required|numeric|min:1|max:6',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Mata Kuliah berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit.
     */
    public function edit($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        return view('mata_kuliah.edit', compact('mataKuliah'));
    }

    /**
     * Mengupdate data mata kuliah.
     */
    public function update(Request $request, $id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);

        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk,'.$id,
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
        ]);

        $mataKuliah->update($request->all());

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Mata Kuliah berhasil diupdate!');
    }

    /**
     * Menghapus mata kuliah.
     */
    public function destroy($id)
    {
        $mataKuliah = MataKuliah::findOrFail($id);
        $mataKuliah->delete();

        return redirect()->route('mata-kuliah.index')
            ->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}
