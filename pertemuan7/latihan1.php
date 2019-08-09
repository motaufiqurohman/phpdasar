<?php

$mahasiswa = [
    [
        'nama' => 'Moh Taufiqur Rohman',
        'nrp' => '1',
        'email' => 'taufiq@gmail.com',
        'jurusan' => 'Teknik Kendaraan Ringan',
        'gambar' => '1.png'
    ],
    [
        'nama' => 'Sandika Galih',
        'nrp' => '2',
        'email' => 'sandika@gmail.com',
        'jurusan' => 'Teknik Informatika',
        'gambar' => '2.png'
    ]
];

function get($object)
{
    return '?nama=' . $object['nama'] . '&nrp=' . $object['nrp'] . '&email=' . $object['email'] . '&jurusan=' . $object['jurusan'] . '&gambar=' . $object['gambar'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach($mahasiswa as $mhs) : ?>
                <li><a href="latihan2.php <?php echo get($mhs); ?>"><?php echo $mhs['nama']; ?></a></li>
            <?php endforeach; ?>
        </ul>
</body>
</html>