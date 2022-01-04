<?php 

function a() {
    echo "<br>";
}

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
        return "{$this->penulis}, {$this->penerbit}";
    }

    public function getInfoLengkap() {
        $str = "{$this->judul} | {$this->getLabel()} {$this->harga}";
        return $str;
    }
    
}

class Komik extends Produk {
    public $jmlhHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlhHalaman = $jmlhHalaman;
    }

    public function getInfoLengkap() {
        return "Komik : " . parent::getInfoLengkap() . " ~ {$this->jmlhHalaman} Halaman";
    }
}

class Game extends Produk {
    public $waktu;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktu = $waktu;
    }
    public function getInfoLengkap() {
        return "Game :" . parent::getInfoLengkap() . " ~ {$this->waktu} Jam";
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
$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk4 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
// $info = new CetakInfo();
// echo $info->cetak($produk3);

// Komik: Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman;
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 JUam;
echo $produk3->getInfoLengkap();
a();
echo $produk4->getInfoLengkap();