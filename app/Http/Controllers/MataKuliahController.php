<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mata_kuliahs = MataKuliah::latest()->get();

        return view('mata_kuliah.index', compact('mata_kuliahs'));
    }

    public function create()
    {
        return view('mata_kuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'kode_mk' => 'required|unique:mata_kuliah,kode_mk',
            'nama_mk' => 'required',
            'sks' => 'required|numeric|min:1|max:6',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('mata_kuliah.index')
            ->with('success', 'Mata Kuliah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mata_kuliah = MataKuliah::findOrFail($id);

        return view('mata_kuliah.edit', compact('mata_kuliah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_mk' => 'required|unique:matakuliah,kode_mk,'.$id,
            'nama_mk' => 'required',
            'sks' => 'required|numeric|min:1|max:6',
        ]);

        $mata_kuliah = MataKuliah::findOrFail($id);
        $mata_kuliah->update($request->all());

        return redirect()->route('mata_kuliah.index')
            ->with('success', 'Mata Kuliah berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $mata_kuliah = MataKuliah::findOrFail($id);
        $mata_kuliah->delete();

        return redirect()->route('mata_kuliah.index')
            ->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}
