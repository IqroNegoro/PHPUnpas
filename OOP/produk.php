<?php 

class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
    
}

class CetakInfo {
    public function cetak(Produk $produk) {
        return "{$produk->judul} |{$produk->getLabel()} {(Rp. $produk->harga)}";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
echo "Komik: " . $produk3->getLabel();
echo "<br>";
$info = new CetakInfo();
echo $info->cetak($produk3);
?>