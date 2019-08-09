<?php
// cek apakah tidak ada data di $_GET
if(
    !isset($_GET['nama']) ||
    !isset($_GET['nrp']) ||
    !isset($_GET['email']) ||
    !isset($_GET['gambar']) ||
    !isset($_GET['jurusan'])
){
    // redirect
    header('Location: latihan1.php');
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
    <ul>
        <li><img src="img/<?php echo $_GET['gambar']; ?>" width="120" height="120"></li>
        <li><?php echo $_GET['nama']; ?></li>
        <li><?php echo $_GET['nrp']; ?></li>
        <li><?php echo $_GET['email']; ?></li>
        <li><?php echo $_GET['jurusan']; ?></li>
    </ul>
    <a href="latihan1.php">Kembali</a>
</body>
</html>