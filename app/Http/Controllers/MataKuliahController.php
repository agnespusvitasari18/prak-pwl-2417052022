<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\MataKuliah; // Pastikan baris ini ada

    class MataKuliahController extends Controller
    {
        // 1. Method untuk menampilkan daftar mata kuliah
        public function index()
        {
            $data = [
                'title' => 'List Mata Kuliah',
                'mks' => MataKuliah::all(),
            ];
            return view('list_mk', $data);
        }

        // 2. Method untuk menampilkan form tambah data
        public function create()
        {
            return view('create_mk', ['title' => 'Create Mata Kuliah']);
        }

        // 3. Method untuk memproses dan menyimpan data dari form
        public function store(Request $request)
        {
            MataKuliah::create([
                'nama_mk' => $request->input('nama_mk'),
                'sks' => $request->input('sks'),
            ]);

            return redirect()->to('/matakuliah');
        }
    }