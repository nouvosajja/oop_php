<?php

class Kos {
    public $no_kamar;
    public $nama;   
    public $umur;

    public function __construct($no_kamar, $nama){
        $this->no_kamar = $no_kamar;
        $this->nama = $nama;
    }
    
    public function umur($umur){
        $this->umur = $umur;
    } 
    public function intro(){
        echo "Kos Bu Surati ";
    }
}


class Alamat extends Kos {
    public $alamat;
    public $jurusan;

    public function  __construct($no_kamar, $nama, $umur, $alamat, $jurusan){
        $this->no_kamar = $no_kamar;
        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;

    }
    public function __destruct(){
        echo "No kamar nya {$this->no_kamar}, namanya {$this->nama}, umurnya {$this->umur}, alamat nya {$this->alamat}, dan jurusannya {$this->jurusan}";
    }
}

$alamat = new Alamat(1, "Muhammad Nouvaldio", 17 ,"Tuban", "Animasi");
$alamat->intro();
?>