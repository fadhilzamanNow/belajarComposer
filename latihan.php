<?php

require_once "./vendor/autoload.php";

use Belajar\Aja\Mahasiswa;

$mahasiswa1 = new Mahasiswa("Fadhil Isfadhillah",66);

var_dump($mahasiswa1);


$mahasiswa1->Sapa();

?>