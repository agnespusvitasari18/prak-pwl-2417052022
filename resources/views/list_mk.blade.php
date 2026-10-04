@extends('layouts.app')

@section('content')
<div class="container mt-4">
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
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">Belum ada data mata kuliah.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
