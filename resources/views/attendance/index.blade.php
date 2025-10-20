<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    @extends('master')
    @section('title', 'Daftar Attendance')
    @section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Attendance</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Waktu Masuk</th>
                    <th>Waktu Keluar</th>
                    <th>Status Absensi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($attendance as $attendance)
                <tr>
                    <td>{{  $attendance->tanggal }}</td>
                    <td>{{  $attendance->waktu_masuk }}</td>
                    <td>{{  $attendance->waktu_keluar }}</td>
                    <td>{{  $attendance->status_absensi }}</td>
                    <td><a href="{{  route('attendance.show', $attendance->id) }}">Detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>