<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::latest()->paginate(10);

        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dosen' => 'required|min:3',
            'NIDN' => 'required|unique:dosens,NIDN',
            'email' => 'required|email|unique:dosens,email',
            'keahlian' => 'required',
        ]);

        Dosen::create($request->all());

        return redirect()->route('dosen.index')->with('success', 'Data Dosen berhasil ditambahkan!');
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama_dosen' => 'required|min:3',
            'NIDN' => 'required|unique:dosens,NIDN,'.$dosen->id,
            'email' => 'required|email|unique:dosens,email,'.$dosen->id,
            'keahlian' => 'required',
        ]);

        $dosen->update($request->all());

        return redirect()->route('dosen.index')->with('success', 'Data Dosen berhasil diperbarui!');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data Dosen berhasil dihapus!');
    }
}
