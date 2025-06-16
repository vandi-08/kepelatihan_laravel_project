@extends('layouts.app')

@section('content')
    <h2 style="font-size: 1.8rem; font-weight: bold; color: #4f46e5; margin-bottom: 20px;">
        ➕ Tambah Karyawan
    </h2>

    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf

        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Nama Karyawan" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email Karyawan" required>
        </div>

        <div>
            <label for="departemen">Departemen</label>
            <input type="text" name="departemen" id="departemen" value="{{ old('departemen') }}" placeholder="Departemen Karyawan" required>
        </div>

        <div>
            <label for="jabatan">Jabatan</label>
            <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan') }}" placeholder="Jabatan Karyawan" required>
        </div>

        <div>
            <label for="pelatihan">Pelatihan</label>
            <input type="text" name="pelatihan" id="pelatihan" value="{{ old('pelatihan') }}" placeholder="Pelatihan Karyawan" required>
        </div>

        <div>
            <label for="tanggal_daftar">Tanggal_Daftar</label>
            <input type="date" name="tanggal_daftar" id="tanggal_daftar" value="{{ old('tanggal_daftar') }}" required>
        </div>

        <button type="submit">Simpan Karyawan</button>
    </form>

    <div style="margin-top: 20px;">
        <a href="{{ route('karyawan.index') }}" style="color: #4f46e5;">← Kembali ke Daftar Karyawan</a>
    </div>
@endsection
