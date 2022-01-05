<?php 

class Komik extends Produk implements InfoProduk
{
    public $jmlhHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlhHalaman = $jmlhHalaman;
    }
    
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} {$this->harga}";
        return $str;
    }

    public function getInfoLengkap()
    {
        return "Komik : " . $this->getInfo() . " ~ {$this->jmlhHalaman} Halaman";
    }
}