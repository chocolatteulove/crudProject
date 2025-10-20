<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    @extends('master')
    @section('title', 'Salaries')
    @section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Salaries</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Tanggal Masuk</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($salaries as $salaries)
                <tr>
                    <td>{{  $salaries->nama_lengkap }}</td>
                    <td>{{  $salaries->bulan }}</td>
                    <td>{{  $salaries->gaji_pokok }}</td>
                    <td>{{  $salaries->tunjangan }}</td>
                    <td>{{  $salaries->potongan }}</td>
                    <td>{{  $salaries->total_gaji }}</td>
                    <td>
                        <a href="{{  route('salaries.show', $salaries->id) }}">Detail</a> |
                        <a href="{{  route('salaries.edit', $salaries->id) }}">Edit</a> |
                        <form action="{{ route('salaries.destroy', $salaries->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>