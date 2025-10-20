<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    @extends('master')
    @section('title', 'Daftar Department')
    @section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Department</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama Department</th>
                </tr>
            </thead>

            <tbody>
                @foreach($departmen as $department)
                <tr>
                    <td>{{  $department->nama_department }}</td>
                    <td>
                        <a href="{{  route('department.show', $department->id) }}">Detail</a> |
                        <a href="{{  route('department.edit', $department->id) }}">Edit</a> |
                        <form action="{{ route('department.destroy', $department->id)}}" method="POST" style="display:inline;">
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