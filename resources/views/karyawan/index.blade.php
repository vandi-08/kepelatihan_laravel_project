@extends('layouts.app')

@section('content')
    <h2 style="font-size: 1.8rem; font-weight: bold; color: #4f46e5; margin-bottom: 20px;">
        📋 Daftar Karyawan
    </h2>

    @if (session('success'))
        <div style="background-color: #d1fae5; color: #065f46; padding: 10px 15px; border-radius: 5px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Departemen</th>
                <th>Jabatan</th>
                <th>Pelatihan</th>
                <th>Tanggal Daftar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->email }}</td>
                    <td>{{ $karyawan->departemen }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>{{ $karyawan->pelatihan }}</td>
                    <td>{{ $karyawan->tanggal_daftar }}</td>
                    <td>
                        <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align: center; color: #6b7280; padding: 20px;">Tidak ada data karyawan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
