<?php 

//cek apakah tidak ada data di get
if (!isset($_GET["nama"]) || !isset($_GET["nrp"]) || !isset($_GET["jurusan"]) || !isset($_GET["email"]) || !isset($_GET["gambar"])) {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="../pertemuan6/<?= $_GET["gambar"]?>" alt=""></li>
        <li><?= $_GET["nama"]?></li>
        <li><?= $_GET["nrp"]?></li>
        <li><?= $_GET["email"]?></li>
        <li><?= $_GET["jurusan"]?></li>
    </ul>
    <a href="index.php"></a>
</body>
</html>