<?php 

function a() {
    echo "<br>";
}

class Produk {
    private $judul;
    private $penulis;
    private $penerbit;
    private $harga;
    private $diskon = 0;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul() {
        return $this->judul;
    }
    
    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("judul bukan string");
        }
        $this->judul = $judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penulis) {
        $this->penulis = $penulis;
    }

    
    public function getPenerbit() {
        return $this->penulis;
    }
    
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
    
    public function getDiskon() {
        $this->penulis = $penulis;
    }

    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit}";
    }
    
    public function getInfoLengkap() {
        $str = "{$this->judul} | {$this->getLabel()} {$this->harga}";
        return $str;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
// $info = new CetakInfo();
// echo $info->cetak($produk3);

// Komik: Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman;
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 JUam;
echo $produk1->getInfoLengkap();
a();
echo $produk2->getInfoLengkap();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
$produk1->setJudul("Naruto");
echo $produk1->getJudul();
