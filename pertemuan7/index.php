<?php 

//variable superglobals berbentuk arroy associative
// $_GET
// $_GET["nama"] = "Sandhika galih";
// $_GET["NRP"] = "20457234";
// get jg bisa send key dari parameter file?nama

$mahasiswa = [
[
    "nrp" => "043040023",
    "nama" => "Sandhika Galih",
    "email" => "sandikagalih@unpas.ac.id",
    "jurusan" => "Teknik Informatika",
    "gambar" => "sandhika.jpg",
],
[
    "nrp" => "033040001",
    "nama" => "Doddy Ferdiansyah",
    "email" => "doddy@gmail.com",
    "jurusan" => "Teknik Industri",
    "gambar" => "doddy.jpg",
]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&nrp=<?= $mhs["nrp"]?>&email=<?=$mhs["email"]?>&jurusan=<?=$mhs["jurusan"]?>&gambar=<?=$mhs["gambar"]?>"><?= $mhs["nama"]?></a>
            </li>
        </ul>
    <?php endforeach ?>
</body>
</html>