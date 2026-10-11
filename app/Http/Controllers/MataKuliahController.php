<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

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
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->to('/matakuliah')->with('success', 'Data mata kuliah berhasil ditambahkan!');
    }

    // 4. Method untuk menampilkan form edit dengan data lama
    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);
        return view('edit_mk', ['title' => 'Edit Mata Kuliah', 'mk' => $mk]);
    }

    // 5. Method untuk memproses update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        $mk = MataKuliah::findOrFail($id);
        $mk->update([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
        ]);

        return redirect()->to('/matakuliah')->with('success', 'Data berhasil diperbarui!');
    }

    // 6. Method untuk menghapus data
    public function destroy($id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->delete();

        return redirect()->to('/matakuliah')->with('success', 'Data berhasil dihapus!');
    }
}