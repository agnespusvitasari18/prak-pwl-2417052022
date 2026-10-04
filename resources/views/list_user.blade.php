@extends('layouts.app')

@section('content')
<div class="row mb-4 align-items-center">
    <div class="col">
        <h1 class="h3 mb-0 text-gray-800">Daftar Pengguna</h1>
    </div>
    <div class="col-auto">
        <a href="{{ route('user.create') }}" class="btn btn-primary shadow-sm">
            + Tambah Pengguna
        </a>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-header py-3 bg-white">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengguna Terdaftar</h6>
    </div>
    <div class="card-body">
        @include('components.user-table', ['users' => $users])
    </div>
</div>
@endsection
