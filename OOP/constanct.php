<?php 

// define("NAMA", "Sandhika galih");
// echo NAMA;

// const UMUR = 32;
// echo UMUR;

class Coba {
    public static $kelas = __CLASS__;
}

echo Coba::$kelas;


// echo Coba::NAMA;
echo __LINE__;
echo __FILE__;

function aokwkoawokaw() {
    return __FUNCTION__;
}

?>