@extends('layouts.app')
@section('title', 'Edit Jurusan')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h4 class="fw-bold mb-4">Edit Jurusan</h4>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Kode Jurusan</label>
                        <input type="text" name="kode_jurusan" class="form-control" value="{{ $jurusan->kode_jurusan }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" class="form-control" value="{{ $jurusan->nama_jurusan }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('jurusan.index') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection