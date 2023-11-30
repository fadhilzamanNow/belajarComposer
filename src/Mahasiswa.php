<?php

namespace Belajar\Aja;

class Mahasiswa{
    public int $nim;

    public string $nama;
    public function __construct(string $nama,int $nim){
        $this->nama = $nama;
        $this->nim = $nim;  
    }

    public function Sapa(){
        echo "Halo $this->nama dengan NIM $this->nim di Universitas Kami. Selamat Sukses ";
    }


}


?>