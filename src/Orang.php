<?php

namespace Belajar\Aja;

class Orang{
    public string $namaorang;
    public int $umur;


    public function __construct (string $namaorang, int $umur){
        $this->namaorang = $namaorang;
        $this->umur = $umur;
    }

    public function Hai(){
        echo "$this->namaorang , kamu umur $this->umur ";
    }

}
?>