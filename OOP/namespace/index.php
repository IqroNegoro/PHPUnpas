<?php 

require_once "App/init.php";

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfo();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
// Aliasing;
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;
new ProdukUser();
echo "<br>";
new ServiceUser();

?>