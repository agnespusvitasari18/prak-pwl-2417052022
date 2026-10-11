@extends('layouts.app')

@section('content')
<div class="container mt-4">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Mata Kuliah</h2>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary shadow-sm">
            ➕ Tambah Mata Kuliah
        </a>
    </div>

    <div class="card shadow border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0 text-center">
                    <thead class="table-dark">
                        <tr>
                            <th class="py-3">No</th>
                            <th class="py-3 text-start">Nama Mata Kuliah</th>
                            <th class="py-3">SKS</th>
                            <th class="py-3">UUID</th>
                            <th class="py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mks as $index => $mk)
                            <tr>
                                <td class="align-middle">{{ $index + 1 }}</td>
                                <td class="align-middle text-start fw-bold">{{ $mk->nama_mk }}</td>
                                <td class="align-middle">
                                    <span class="badge bg-info text-dark px-3 py-2 rounded-pill">{{ $mk->sks }} SKS</span>
                                </td>
                                <td class="align-middle text-muted small" style="font-family: monospace;">{{ $mk->id }}</td>
                                <td class="align-middle">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm btn-warning text-dark d-inline-flex align-items-center">
                                            <span class="me-1">✏️</span> Edit
                                        </a>
                                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger d-inline-flex align-items-center">
                                                <span class="me-1">🗑️</span> Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">Belum ada data mata kuliah.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
