<?php 
require "functions.php";
//ambil data url
$id = $_GET["id"];
$val = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
            <script> 
                alert('Berhasil Diubah');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo mysqli_error($connect);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tambah Data Mahasiswa </title>
</head>
<body>
    <h1> Ubah data mahasiswa </h1>
    <form action="" method="post">
        <label for="id"></label>
        <input type="hidden" id="id" name="id" value="<?= $val["id"]?>">
        <ul>
            <li>
                <label for="nrp"> NRP :  </label>
                <input type="text" id="nrp" name="nrp" value="<?= $val["nrp"]?>">
            </li>
            <li>
                <label for="nama"> Nama :  </label>
                <input type="text" id="nama" name="nama" value="<?= $val["nama"]?>">
            </li>
            <li>
                <label for="email"> Email :  </label>
                <input type="text" id="email" name="email" value="<?= $val["email"]?>">
            </li>
            <li>
                <label for="jurusan"> Jurusan : </label>
                <input type="text" id="jurusan" name="jurusan" value="<?= $val["jurusan"]?>">
            </li>
            <li>
                <label for="gambar"> Gambar :  </label>
                <input type="text" id="gambar" name="gambar" value="<?= $val["gambar"]?>">
            </li>
            <li>
                <button type="submit" name="submit"> Ubah Data </button>
            </li>
        </ul>
    </form>
</body>
</html>