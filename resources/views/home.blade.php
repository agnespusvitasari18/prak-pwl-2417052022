@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 class="mb-4">✨ Selamat Datang di Praktikum PWL ✨</h1>
    <p class="text-muted mb-5">Pilih menu di bawah ini untuk mengelola data sistem Anda secara cepat dan mudah.</p>

    <div class="row justify-content-center">
        <!-- Card Mata Kuliah -->
        <div class="col-md-5 mb-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body">
                    <h3 class="card-title text-primary">📚 Kelola Mata Kuliah</h3>
                    <p class="card-text text-muted">Akses tabel daftar mata kuliah atau tambahkan data mata kuliah baru ke dalam sistem.</p>
                    <div class="d-grid gap-2">
                        <a href="{{ url('/matakuliah') }}" class="btn btn-outline-primary">Lihat Daftar Mata Kuliah</a>
                        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">➕ Tambah Mata Kuliah</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card User -->
        <div class="col-md-5 mb-4">
            <div class="card shadow border-0 h-100">
                <div class="card-body">
                    <h3 class="card-title text-success">👥 Kelola User</h3>
                    <p class="card-text text-muted">Akses data profil pengguna atau tambahkan pengguna baru ke sistem.</p>
                    <div class="d-grid gap-2">
                        <a href="{{ url('/user') }}" class="btn btn-outline-success">Lihat Daftar User</a>
                        <a href="{{ route('user.create') }}" class="btn btn-success">➕ Tambah User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
