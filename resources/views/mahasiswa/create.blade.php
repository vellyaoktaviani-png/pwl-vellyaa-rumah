@extends('layouts.app')
@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <h4 class="fw-bold mb-4">Tambah Mahasiswa Baru</h4>
        <div class="card">
            <div class="card-body p-4">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf {{-- Wajib ada untuk keamanan form Laravel --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" name="Fullname" class="form-control @error('Fullname') is-invalid @enderror" value="{{ old('Fullname') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">NIM</label>
                        <input type="text" name="NIM" class="form-control @error('NIM') is-invalid @enderror" value="{{ old('NIM') }}">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tempat Lahir</label>
                            <input type="text" name="Tempat_Lahir" class="form-control" value="{{ old('Tempat_Lahir') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tanggal Lahir</label>
                            <input type="date" name="Tanggal_Lahir" class="form-control" value="{{ old('Tanggal_Lahir') }}">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Alamat</label>
                        <textarea name="Alamat" rows="3" class="form-control">{{ old('Alamat') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary px-4">Simpan</button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection