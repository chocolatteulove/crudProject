<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    @extends('master')
    @section('title', 'Daftar Jabatan')
    @section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Nama Jabatan</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Jabatan</th>
                    <th>Gaji Pokok</th>
                </tr>
            </thead>

            <tbody>
                @foreach($positions as $pos)
                <tr>
                    <td>{{  $positions->nama_jabatan }}</td>
                    <td>{{  $positions->gaji_pokok }}</td>
                    <td>
                        <a href="{{  route('positions.show', $positions->id) }}">Detail</a> |
                        <a href="{{  route('positions.edit', $positions->id) }}">Edit</a> |
                        <form action="{{ route('employees.destroy', $positions->id)}}" method="POST" style="display:inline;">
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