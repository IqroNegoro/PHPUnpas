<?php 

class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $halaman;
    public $waktu;
    public $type;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $waktu = 0, $type) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
        $this->type = $type;
    }

    public function getLabel() {
        return "{$this->judul} | {$this->penulis}, {$this->penerbit} (Rp. {$this->harga})";
    }

    public function getInfoLengkap() {
        $str = "{$this->type} : {$this->getLabel()}";
        if ($this->type == "Komik") {
            $str .= " - {$this->halaman} Halaman.";
        } else if ($this->type == "Game") {
            $str .= " - {$this->waktu} Jam";
        }
        return $str;
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
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0, "Komik");
$produk4 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");
// $info = new CetakInfo();
// echo $info->cetak($produk3);

// Komik: Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000) - 100 Halaman;
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) - 50 JUam;
echo $produk3->getInfoLengkap();


















