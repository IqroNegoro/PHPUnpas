<?php

function a()
{
    echo "<br>";
}

abstract class Produk
{
    private $judul;
    private $penulis;
    private $penerbit;
    private $harga;
    private $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("judul bukan string");
        }
        $this->judul = $judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penulis)
    {
        $this->penulis = $penulis;
    }


    public function getPenerbit()
    {
        return $this->penulis;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        $this->penulis = $penulis;
    }

    public function getLabel()
    {
        return "{$this->penulis}, {$this->penerbit}";
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    abstract public function getInfoLengkap();

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} {$this->harga}";
        return $str;
    }
}

class Komik extends Produk
{
    public $jmlhHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlhHalaman = $jmlhHalaman;
    }

    public function getInfoLengkap()
    {
        return "Komik : " . $this->getInfo() . " ~ {$this->jmlhHalaman} Halaman";
    }
}

class Game extends Produk
{
    public $waktu;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktu = $waktu;
    }
    public function getInfoLengkap()
    {
        return "Game :" . $this->getInfo() . " ~ {$this->waktu} Jam";
    }
}

class CetakInfo
{
    public $daftarProduk = [];
    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "Daftar Produk : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoLengkap()} <br>";
        }
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfo();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
