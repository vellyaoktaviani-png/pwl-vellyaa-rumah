@extends('layouts.app')
@section('title', 'Edit Data Dosen')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('dosen.index') }}" class="btn btn-outline-secondary btn-sm me-3">
                <i class="bi bi-arrow-left"></i>
            </a>
            <h4 class="fw-bold mb-0">Edit Data Dosen</h4>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Dosen</label>
                        <input type="text" name="nama_dosen" class="form-control @error('nama_dosen') is-invalid @enderror" 
                               value="{{ old('nama_dosen', $dosen->nama_dosen) }}" placeholder="Nama lengkap dan gelar">
                        @error('nama_dosen')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">NIDN</label>
                        <input type="text" name="NIDN" class="form-control @error('NIDN') is-invalid @enderror" 
                               value="{{ old('NIDN', $dosen->NIDN) }}" placeholder="Masukkan NIDN">
                        @error('NIDN')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                               value="{{ old('email', $dosen->email) }}" placeholder="email@contoh.com">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Bidang Keahlian</label>
                        <textarea name="keahlian" rows="3" class="form-control @error('keahlian') is-invalid @enderror" 
                                  placeholder="Contoh: Basis Data, Web Programming">{{ old('keahlian', $dosen->keahlian) }}</textarea>
                        @error('keahlian')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary px-4">Update Data</button>
                        <a href="{{ route('dosen.index') }}" class="btn btn-light px-4">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection