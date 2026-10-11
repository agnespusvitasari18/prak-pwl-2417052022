@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow border-0 mt-4">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Buat Pengguna Baru</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan Nama Lengkap">
                    </div>
                    
                    <div class="mb-3">
                        <label for="npm" class="form-label fw-bold">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm" required placeholder="Masukkan NPM">
                    </div>
                    
                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-bold">Kelas</label>
                        <select class="form-select" name="kelas_id" id="kelas_id" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ url('/user') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Pengguna</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
