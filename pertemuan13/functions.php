<?php 

$server = "localhost";
$user = "root";
$pass = "";
$db = "phpdasar";

$connect = mysqli_connect("$server", "$user", "$pass", "$db");

function query($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $connect;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    //upload dulu
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $sql = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
    mysqli_query($connect, $sql);
    return mysqli_affected_rows($connect);
}

function upload() {
    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmp = $_FILES["gambar"]["tmp_name"];
    
    if ($error === 4) {
        echo "<script> alert('Pilih gambar') </script>";
        return false;
    }

    $ext = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    $type = ["jpg", "jpeg", "png"];
    if (!in_array($ext, $type)) {
        echo "<script> alert('Bukan gambar') </script>";
        return false;
    }

    if ($ukuranFile > 5000000) {
        echo "<script> alert('File maksimum 5mb') </script>";
        return false;
    }

    move_uploaded_file($tmp, "img/" . $namaFile);
    return $namaFile;
}

function hapus($data) {
    global $connect;
    $id = $data["id"];
    $sql = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($connect, $sql);

    return mysqli_affected_rows($connect);
}

function ubah($data) {
    global $connect;
    $id = htmlspecialchars($data["id"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);  

    $sql = "UPDATE mahasiswa SET nrp = $nrp,
            nama = '$nama', email = '$email', jurusan = '$jurusan',
            gambar = '$gambar' WHERE id = $id;
    ";
    mysqli_query($connect, $sql);
    
    return mysqli_affected_rows($connect);
}

function cari($data) {
    $sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$data%' OR nrp LIKE '%$data%' OR email LIKE '%$data%' OR jurusan LIKE '%$data%'";
    return query($sql);
}

?>
