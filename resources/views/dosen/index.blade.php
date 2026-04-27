@extends('layouts.app')
@section('title', 'Daftar Dosen')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-0">Daftar Dosen</h4>
        <small class="text-muted">Total: {{ $dosens->total() }} data</small>
    </div>
    <a href="{{ route('dosen.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i> Tambah Dosen
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm">
        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="40" class="ps-3">#</th>
                        <th>Nama Dosen</th>
                        <th>NIDN</th>
                        <th>Email</th>
                        <th>Keahlian</th>
                        <th width="200" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dosens as $dosen)
                    <tr>
                        <td class="text-muted ps-3">{{ $loop->iteration }}</td>
                        <td class="fw-semibold">{{ $dosen->nama_dosen }}</td>
                        <td><span class="nim-badge">{{ $dosen->NIDN }}</span></td>
                        <td>{{ $dosen->email }}</td>
                        <td class="text-muted small">{{ Str::limit($dosen->keahlian, 40) }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('dosen.edit', $dosen) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil me-1"></i> Edit
                                </a>

                                <form action="{{ route('dosen.destroy', $dosen) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data dosen ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash me-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox display-6 d-block mb-2"></i>
                            Belum ada data dosen.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="mt-3 d-flex justify-content-center">
    {{ $dosens->links() }}
</div>
@endsection