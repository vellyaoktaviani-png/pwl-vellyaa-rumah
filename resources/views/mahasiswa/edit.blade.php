@extends('layouts.app')
@section('title', 'Edit Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <h4 class="fw-bold mb-4">Edit Data Mahasiswa</h4>
        <div class="card">
            <div class="card-body p-4">
                <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
                    @csrf
                    @method('PUT') {{-- PENTING: Untuk proses Update data --}}
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" name="Fullname" class="form-control" value="{{ old('Fullname', $mahasiswa->Fullname) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">NIM</label>
                        <input type="text" name="NIM" class="form-control" value="{{ old('NIM', $mahasiswa->NIM) }}">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tempat Lahir</label>
                            <input type="text" name="Tempat_Lahir" class="form-control" value="{{ old('Tempat_Lahir', $mahasiswa->Tempat_Lahir) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tanggal Lahir</label>
                            <input type="date" name="Tanggal_Lahir" class="form-control" value="{{ old('Tanggal_Lahir', $mahasiswa->Tanggal_Lahir) }}">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Alamat</label>
                        <textarea name="Alamat" rows="3" class="form-control">{{ old('Alamat', $mahasiswa->Alamat) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary px-4">Simpan Perubahan</button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection