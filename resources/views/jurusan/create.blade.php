@extends('layouts.app')
@section('title', 'Tambah Jurusan')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h4 class="fw-bold mb-4">Tambah Jurusan</h4>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('jurusan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Kode Jurusan</label>
                        <input type="text" name="kode_jurusan" class="form-control" placeholder="Contoh: TI">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" placeholder="Contoh: Teknik Informatika">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('jurusan.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection