<?php 
$nilai = 85;
if ($nilai > 70) {
    echo "lulus";
// tambah kondisi
} elseif ($nilai <=60 && $nilai>= 50) {
    echo "remedi";
} else {
    echo "tidak lulus";
}
echo "\n\n";

// switch
$kelas = '1A';
switch ($kelas) {
    case '1A':
        echo 'Kelas 1A';
        break;
    case '1B':
        echo 'Kelas 1B';
        break;
    case '1C':
        echo 'Kelas 1C';
        break;
    
    default:
        echo 'Kelas 1';
        break;
}