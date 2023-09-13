<?php
// $motor = ['supra','jupiter','mio','vario'];

$motor = array('supra', 'jupiter', 'mio', 'vario');
print_r($motor);
echo $motor[0];
echo "\n";

// menggunakan for
$jumlah = count($motor);
for ($i = 0; $i < $jumlah; $i++) {
    echo $motor[$i] . "\n";
}

// mengurutkan array
$asc = sort($motor);        // urut ascending
$desc = ksort($motor);      // urut descending
print_r($asc);
echo "\n";
print_r($desc);
echo "\n";

// array asosiatif
$data = array(
    'aku' => 24,
    'kamu' => 12
);
echo "aku berumur " . $data["aku"];
echo "\n";

// menggunakan looping foreach
foreach ($data as $subject => $age) {
    echo $subject . " berumur " . $age . "\n";
}

// multidimensional array
$moustaches = array(
    array(
        "name" => "Handlebar",
        "creep_factor" => "High",
        "avg_growth_days" => 14
    ),
    array(
        "name" => "Salvador Dali",
        "creep_factor" => "Extreme",
        "avg_growth_days" => 62
    ),
    array(
        "name" => "Fu Manchu",
        "creep_factor" => "Very High",
        "avg_growth_days" => 58
    )
);
echo $moustaches[2]['creep_factor'];
