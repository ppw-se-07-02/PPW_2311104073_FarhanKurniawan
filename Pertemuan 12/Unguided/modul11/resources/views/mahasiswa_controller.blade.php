<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Daftar Mahasiswa</h2>
<ul>
@foreach ($mahasiswa as $mhs)
    <li>{{ $mhs }}</li>
@endforeach
</ul>

</body>
</html>
