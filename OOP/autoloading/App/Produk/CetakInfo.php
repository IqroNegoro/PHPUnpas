<?php 

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