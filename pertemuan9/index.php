<?php
// koneksi ke database
$db = mysqli_connect('localhost', 'root', '', 'phpdasar');

// ambil data dari table mahasiswa / query
$result = mysqli_query($db, "SELECT * FROM mahasiswa");
var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NO.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td>
                <img src="img/1.png" alt="1.png" width="50" height="50">
            </td>
            <td>1</td>
            <td>Moh Taufiqur Rohman</td>
            <td>taufiq@gmail.com</td>
            <td>Teknik Kendaraan Ringan</td>
        </tr>
    </table>
</body>
</html>