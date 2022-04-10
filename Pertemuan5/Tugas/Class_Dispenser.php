<?php

class Dispenser{
    protected $volume;
    protected $hargasegelas;
    private $Volumegelas;
    public $namaminuman;

    public isi($vol){
        $this->volume = $vol;

    }

    public funcion __construct($namaminuman)
    {
        $this->nama = $namaminuman;
    }

// akses property public
echo $Dispenser->nama = "Tehpucuk";

// akses property private
echo $Dispenser->Volumegelas = "30ml";

// akses property protected
echo $Dispenser->volume = "100ml";
echo $Dispenser->hargagelas = "3000";

}

?>
