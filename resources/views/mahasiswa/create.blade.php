@extends('layouts.app')

@section('content')
<div class="card shadow col-md-8 mx-auto">
    <div class="card-header"><h5>Tambah Mahasiswa</h5></div>
    <div class="card-body">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="Fullname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="NIM" class="form-control" required>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label>Tempat Lahir</label>
                    <input type="text" name="Tempat_Lahir" class="form-control" required>
                </div>
                <div class="col">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="Tanggal_Lahir" class="form-control" required>
                </div>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="Alamat" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Simpan Data</button>
        </form>
    </div>
</div>
@endsection