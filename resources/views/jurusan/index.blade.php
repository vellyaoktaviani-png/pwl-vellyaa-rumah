@extends('layouts.app')
@section('title', 'Daftar Jurusan')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">Daftar Jurusan</h4>
    <a href="{{ route('jurusan.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg"></i> Tambah Jurusan
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jurusans as $j)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><span class="badge bg-info text-dark">{{ $j->kode_jurusan }}</span></td>
                    <td>{{ $j->nama_jurusan }}</td>
                    <td class="text-center">
                        <a href="{{ route('jurusan.edit', $j) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        <form action="{{ route('jurusan.destroy', $j) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Hapus jurusan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection