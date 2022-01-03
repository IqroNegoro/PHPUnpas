<?php 
require "../functions.php";
$key = $_GET["keyword"];
$sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%$key%' OR nrp LIKE '%$key%' OR email LIKE '%$key%' OR jurusan LIKE '%$key%'";
$mahasiswa = query($sql)
?>
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
                    <a href="ubah.php?id=<?= $x["id"]?>">Ubah</a>
                    <a href="hapus.php?id=<?= $x["id"]?>">Hapus</a>
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