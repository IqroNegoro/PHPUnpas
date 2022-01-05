<?php 

class Game extends Produk implements InfoProduk
{
    public $waktu;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktu = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktu = $waktu;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} {$this->harga}";
        return $str;
    }

    public function getInfoLengkap()
    {
        return "Game :" . $this->getInfo() . " ~ {$this->waktu} Jam";
    }
}