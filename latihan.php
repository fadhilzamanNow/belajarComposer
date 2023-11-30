<?php

require_once "./vendor/autoload.php";

use Belajar\Aja\Mahasiswa;
use Belajar\Aja\Orang;

$mahasiswa1 = new Mahasiswa("Fadhil Isfadhillah",66);

var_dump($mahasiswa1);


$mahasiswa1->Sapa();

$orang1 = new Orang("Ghoni",21);

var_dump($orang1);


?>