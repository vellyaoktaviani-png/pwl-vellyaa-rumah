@extends('layouts.app')

@content
<div class="container">
    <h3>Tambah Dosen</h3>
    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Dosen</label>
            <input type="text" name="nama_dosen" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="NIDN" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keahlian</label>
            <input type="text" name="keahlian" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endcontent