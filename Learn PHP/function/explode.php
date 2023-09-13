<?php
$kata = "Hallo Selamat Pagi";
$exp = explode(' ', $kata);
echo $exp[2];

// untuk menyatukan kata yang telah terpisah menjadi 1 kalimat dengan penghubung
echo implode(' ',$exp);
