<?php 

class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $halaman;
    public $waktu;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $waktu = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
    }

    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit}";
    }

    public function getInfoLengkap() {
        $str = "{$this->judul} | {$this->getLabel()} {$this->harga}";
        return $str;
    }
    
}

class Komik extends Produk {
    public function getInfoKomik() {
        return "Komik : {$this->getInfoLengkap()} - {$this->halaman} Halaman";
    }
}

class Game extends Produk {
    public function getInfoGame() {
        return "Game : {$this->getInfoLengkap()} - {$this->waktu} Jam";
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
$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0);
$produk4 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);
// $info = new CetakInfo();
// echo $info->cetak($produk3);

// Komik: Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman;
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 JUam;
echo $produk3->getInfoKomik();
echo "<br>";
echo $produk4->getInfoGame();

















