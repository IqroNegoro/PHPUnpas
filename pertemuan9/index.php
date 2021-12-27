<?php 

require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");
//mysqli fetch assoc mengembalikan jadi array assoc
//row jadi index
//array gabungan assoc dan row jadi keluar semua index ama key nya
//object
// $row = mysqli_fetch_row($result);
// var_dump($row);
// echo "<br>";

// $assoc = mysqli_fetch_assoc($result);
// var_dump($assoc);

// echo "<br>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Foto</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php 
        $i = 1;
        foreach ($mahasiswa as $x) :
        ?>
            <tr style="text-align: center;">
                <td><?=$i?></td>
                <td>
                    <a href="">Ubah</a>
                    <a href="">Hapus</a>
                </td>
                <td>
                    <img src="img/<?=$x["gambar"]?>" alt="" width="50">
                </td>
                <td><?=$x["nrp"]?></td>
                <td><?=$x["nama"]?></td>
                <td><?=$x["email"]?></td>
                <td><?=$x["jurusan"]?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>