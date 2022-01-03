<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

require "functions.php";

//pagination
$dataPerhalaman = 3;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $dataPerhalaman);
// 8/2
$active = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahHalaman * $active) - $jumlahHalaman;
// 4 * 1 - 4 = 0
// 4 * 2 - 4 = 4;
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $dataPerhalaman");
// DARI 0. cma 2
// DARI 4. cma 2
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

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
    <a href="logout.php"> Logout </a>
    <h1> Daftar Mahasiswa </h1>
    <a href="tambah.php"> Tambah Data </a>
    <br><br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword" autocomplete="off">
        <button type="submit" name="cari"> Cari </button>
    </form>
    <?php if ($active > 1) : ?>
        <a href="?halaman=<?= $active - 1 ?>">&laquo;</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $active) : ?>
            <a href="?halaman=<?= $i; ?>" style="color:red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($active < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $active + 1 ?>">&raquo;</a>
    <?php endif; ?>
    <br>
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
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?id=<?= $x["id"] ?>">Ubah</a>
                    <a href="hapus.php?id=<?= $x["id"] ?>">Hapus</a>
                </td>
                <td>
                    <img src="img/<?= $x["gambar"] ?>" alt="" width="50">
                </td>
                <td><?= $x["nrp"] ?></td>
                <td><?= $x["nama"] ?></td>
                <td><?= $x["email"] ?></td>
                <td><?= $x["jurusan"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>

</html>