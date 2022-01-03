<?php 
require "functions.php";
if (isset($_POST["registrasi"])) {
    if (registrasi($_POST) > 0) {
        echo "<script> 
            alert('Berhasil create user')
        </script>";
        header("Location: index.php");
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
    <title>Halaman registrasi</title>
</head>
<body>
    <style>
        label {
            display: block;
        }
    </style>
    <h1> Halaman registrasi </h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username"> Username : </label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password"> Password : </label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <label for="password2"> Konfirmasi Password : </label>
                <input type="password" id="password2" name="password2">
            </li>
            <li>
                <button type="submit" name="registrasi">Sign up</button>
            </li>
        </ul>
    </form>
</body>
</html>