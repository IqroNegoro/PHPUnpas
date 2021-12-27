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
?>