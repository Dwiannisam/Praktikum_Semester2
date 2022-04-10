<?php

// parent class
class Buah{
    public $nama;
    public $warna;

    // method construct
    public funcion __construct($name, $color)
    {
        $this->nama = $name;
        $this->warna = $color;
    }

    //method intro
    public function intro(){
            echo "ini adalah buah dengan nama : ($this->nama) dan nama ($this->warna)"
    }
}

// child class
class mangga extends buah {
    // method biji
    public function biji (){ 
    echo "buah ini berbiji 1";
    }
}

// buat objek 
$mangga_indramayu = new Mangga("mangga indramayu", "hijau");
$mangga_indramayu->intro();
echo "<br>";
$mangga_indramayu->biji();
?>
