<?php 
$i = 1;
while ($i <= 10) {
    echo $i."\n";
    $i++;
}

$kata = "Halo";
$count = 0;
while ($count <= 10) {
    echo $kata;
    $count++;
}
echo "\n";

// For
for ($i=0; $i < 10; $i++) { 
    echo $i;
}
echo "\n";

// foreach
$moustache = array("Handlebar","Salvador Dali","Fu Manchu");
foreach ($moustache as $m) {
    echo "I love the $m \n";
}