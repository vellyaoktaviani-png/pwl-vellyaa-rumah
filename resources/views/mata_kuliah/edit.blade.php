@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mata Kuliah</h1>

    <form action="{{ route('mata_kuliah.update', $mata_kuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Kode MK</label>
            <input type="text" name="kode_mk" value="{{ $mata_kuliah->kode_mk }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" value="{{ $mata_kuliah->nama_mk }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" value="{{ $mata_kuliah->sks }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('mata_kuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection