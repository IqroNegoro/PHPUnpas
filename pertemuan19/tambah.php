<?php 
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
require "functions.php";
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script> 
                alert('Berhasil Ditambahkan');
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
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp"> NRP :  </label>
                <input type="text" id="nrp" name="nrp">
            </li>
            <li>
                <label for="nama"> Nama :  </label>
                <input type="text" id="nama" name="nama">
            </li>
            <li>
                <label for="email"> Email :  </label>
                <input type="text" id="email" name="email">
            </li>
            <li>
                <label for="jurusan"> Jurusan : </label>
                <input type="text" id="jurusan" name="jurusan">
            </li>
            <li>
                <label for="gambar"> Gambar :  </label>
                <input type="file" id="gambar" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit"> Tambah Data </button>
            </li>
        </ul>
    </form>
</body>
</html>