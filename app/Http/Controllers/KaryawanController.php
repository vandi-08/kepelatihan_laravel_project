<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'         => 'required',
            'email'        => 'required|email|unique:karyawans',
            'departemen'   => 'required',
            'jabatan'      => 'required',
            'pelatihan'    => 'required',
            'tanggal_daftar' => 'required|date',
        ]);

        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')
                         ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());
        return redirect()->route('karyawan.index')
                         ->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Karyawan::destroy($id);
        return redirect()->route('karyawan.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}
