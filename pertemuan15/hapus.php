<?php 

require "functions.php";
if (hapus($_GET) > 0) {
    echo "
    <script> alert('succes!');
    </script>;
    ";
    header("Location: index.php");
} else {
    echo "
    <script> alert('error!'); </script>
    ";
    header("Location: index.php");
}
?>