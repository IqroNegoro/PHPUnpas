<?php 

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
    <title>Document</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="<?php echo $mhs["gambar"]?>" alt="">
            </li>
            <li>
                Nama : <?php echo $mhs["nama"]?>
            </li>
            <li>
                Nrp : <?php echo $mhs["nrp"]?>
            </li>
            <li>
                Jurusan : <?php echo $mhs["jurusan"]?>
            </li>
            <li>
                Email : <?php echo $mhs["email"]?>
            </li>
        </ul>
    <?php endforeach ?>
</body>
</html>