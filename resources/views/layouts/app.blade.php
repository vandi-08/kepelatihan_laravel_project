<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Karyawan</title>

    {{-- CSS Modern --}}
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        header {
            background-color: #4f46e5;
            padding: 15px 25px;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            border-radius: 0 0 10px 10px;
        }

        nav {
            margin-top: 15px;
            margin-bottom: 25px;
        }

        nav a {
            margin-right: 15px;
            text-decoration: none;
            font-weight: 600;
            color: #4f46e5;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #1e3a8a;
            text-decoration: underline;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        th {
            background-color: #e0e7ff;
            padding: 12px;
            text-align: left;
            color: #3730a3;
        }

        td {
            padding: 12px;
            border-top: 1px solid #e5e7eb;
        }

        tr:hover {
            background-color: #f9fafb;
        }

        .btn {
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #4f46e5;
            color: white;
        }

        .btn-danger {
            background-color: #ef4444;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }

        form input,
        form select,
        form textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #d1d5db;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        form label {
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }

        form button {
            background-color: #4f46e5;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        form button:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>

    <header>
        Pendaftaran Anggota Kepelatihan Karyawan
    </header>

    <div class="container">
        <nav>
            <a href="{{ route('karyawan.index') }}">📋 Daftar Karyawan</a>
            <a href="{{ route('karyawan.create') }}">➕ Tambah Karyawan</a>

            @auth
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">🚪 Logout</button>
                </form>
            @endauth
        </nav>

        @yield('content')
    </div>

</body>
</html>
