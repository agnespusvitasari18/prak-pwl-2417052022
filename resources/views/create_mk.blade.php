@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card shadow border-0 mt-4" style="width: 100%; max-width: 600px;">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Buat Mata Kuliah Baru</h4>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('matakuliah.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="nama_mk" class="form-label fw-bold">Nama Mata Kuliah</label>
                    <input type="text" class="form-control" id="nama_mk" name="nama_mk" placeholder="Masukkan nama mata kuliah..." required>
                </div>
                
                <div class="mb-4">
                    <label for="sks" class="form-label fw-bold">SKS</label>
                    <input type="number" class="form-control" id="sks" name="sks" placeholder="Masukkan jumlah SKS..." required>
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="{{ url('/matakuliah') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
