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
    $gambar = htmlspecialchars($data["gambar"]);

    $sql = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
    mysqli_query($connect, $sql);
    return mysqli_affected_rows($connect);

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
?>