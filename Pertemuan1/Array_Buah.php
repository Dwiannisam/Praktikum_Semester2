<?php

// Array (variable yang bisa menyimpan nilai lebih dari 1 )
$mahasiswa = ['Nisa', 'Ahmad', 'Rika'];

// cara print
echo $mahasiswa[0];
echo '<br/>';
echo $mahasiswa[1];

// cara cek variable eror
// var_dump($mahasiswa);

// print array sekaligus
foreach ($mahasiswa as $mhs){
    echo '<h1 style="color:blue;">'.$mhs.'</h1>';
    echo '<br/>';
}

// array multi dimensi
$datadiri = [
    ["nama" => "Nisa", "nim" => "0110221237", "uts" => 100, "uas" => 100],
    ["nama" => "Ahmad", "nim" => "0110221238", "uts" => 90, "uas" => 90],
    ["nama" => "Rika", "nim" => "0110221239", "uts" => 80, "uas" => 80]
];

// print array multi dimensi
echo $datadiri[0]["nama"];
echo '<br/>';

// looping array multi dimensi
foreach($datadiri as $dari){
echo $dari["nama"].'<br/>';
}
?>
