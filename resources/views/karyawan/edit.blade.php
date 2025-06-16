@extends('layouts.app')

@section('content')
    <h2 style="font-size: 1.8rem; font-weight: bold; color: #4f46e5; margin-bottom: 20px;">
        ✏️ Edit Karyawan
    </h2>

    @if ($errors->any())
        <div style="background-color: #fde2e2; color: #b91c1c; padding: 10px 15px; border-radius: 5px; margin-bottom: 15px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nama">Nama</label>
            <input
                type="text"
                name="nama"
                id="nama"
                value="{{ old('nama', $karyawan->nama) }}"
                placeholder="Nama Karyawan"
                required
            >
        </div>

        <div>
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email', $karyawan->email) }}"
                placeholder="Email Karyawan"
                required
            >
        </div>

        <div>
            <label for="departemen">Departemen</label>
            <input
                type="text"
                name="departemen"
                id="departemen"
                value="{{ old('departemen', $karyawan->departemen) }}"
                placeholder="Departemen Karyawan"
                required
            >
        </div>

        <div>
            <label for="jabatan">Jabatan</label>
            <input
                type="text"
                name="jabatan"
                id="jabatan"
                value="{{ old('jabatan', $karyawan->jabatan) }}"
                placeholder="Jabatan Karyawan"
                required
            >
        </div>

        <div>
            <label for="pelatihan">Pelatihan</label>
            <input
                type="text"
                name="pelatihan"
                id="pelatihan"
                value="{{ old('pelatihan', $karyawan->pelatihan) }}"
                placeholder="Pelatihan Karyawan"
                required
            >
        </div>

        <div>
            <label for="tanggal">Tanggal Daftar</label>
            <input
                type="date"
                name="tanggal"
                id="tanggal"
                value="{{ old('tanggal', $karyawan->tanggal) }}"
                required
            >
        </div>

        <button type="submit">Perbarui Data</button>
    </form>

    <div style="margin-top: 20px;">
        <a href="{{ route('karyawan.index') }}" style="color: #4f46e5;">← Kembali ke Daftar Karyawan</a>
    </div>
@endsection
