<?php

// Class buah

class buah{
    public $nama;
    protected $warna;
    private $berat;

}

// buat objek

$mangga = new buah();

// akses property public

echo $mangga->nama = "mangga";

// akses property private
echo $mangga->berat = 30;

// akses property protected
echo $mangga->warna = "hijau";


?>