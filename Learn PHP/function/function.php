<?php
function tambah($a, $b)
{
    $hasil = $a + $b;
    echo $hasil;
}
echo tambah(10, 20);
echo "\n";

// return value at parameter
function hitungJumlahArray($array)
{
    $jumlah = 0;
    foreach ($array as $nilai) {
        $jumlah += $nilai;
    }
    return $jumlah;
}

$angka = [1, 2, 3, 4, 5];
$total = hitungJumlahArray($angka);
echo "Jumlah dari array adalah: $total"; // Output: Jumlah dari array adalah: 15
echo "\n";

function kata()
{
    $kata = "halo";
    echo $kata;
}
echo kata();
echo "\n";

// looping
function loop($counter)
{
    $kata = "halo ";
    for ($i = 0; $i <= $counter; $i++) {
        echo $kata;
    }
}
loop(10);
echo "\n";

// sort(), urut dari depan
$dinner = array("Meat", "Potatoes", "Beans", "Rice");
sort($dinner);
foreach ($dinner as $d) {
    echo "$d \n";
}
echo "\n";


// rsort(), urut dari belakang
rsort($dinner);
foreach ($dinner as $d) {
    echo "$d \n";
}
echo "\n";

// strtolower(), smallcaps
$text = "Welcome to My World";
$text = strtolower($text);
echo $text;
echo "\n\n";

// shal()
$password = "Password";
echo "Before : $password\n";
$password = sha1($password);
echo "After : $password\n";
echo "\n";

// ceil()
echo ceil(1.50);
echo "\n";

// floor()
echo floor(0.50);
echo "\n";

// round()
echo round(0.54335, 4);
echo "\n";

// exp()
echo exp(4);
echo "\n";

// strlen()
$str = "Hello world";
echo strlen($str);
echo "\n";

// str_word_count()
$fname = "Welcome to my world";
echo str_word_count($fname);
echo "\n";

// strpos()
$email = 'email@email.com';
if (strpos($email, "@")) {
    echo "This is a valid email";
} else {
    echo "This is a email input field";
}
echo "\n";

// ucwords()
echo ucwords("what is your name?");
echo "\n";

// strtoupper()
echo strtoupper("what is your name?");
echo "\n";

// strtolower()
echo strtolower("What Is YOUR Name?");
echo "\n\n";

// array_merge()
$a = array(
    "name" => "Roy",
    "age" => 24,
    "city" => "Batam"
);
$b = array(
    "state" => "BTH",
    "weight" => 60
);
$z = array_merge($a, $b);
foreach ($z as $key => $value) {
    echo $key . ": " . $value;
    echo "\n";
}
echo "\n";
print_r($z);
echo "\n";

// array_keys()
print_r(array_keys($z));
echo "\n";

// array_values()
print_r(array_values($z));
echo "\n";

// array_push()
$cars = array("Volkswagen", "Audi", "Marcedes");
array_push($cars, "Volvo");
print_r($cars);
echo "\n";

// array_search()
echo array_search("Volvo", $cars);
echo "\n";

// count()
echo count($cars);
echo "\n\n";

// arsort()
$n = array(
    "Milk" => 2,
    "Cheese" => 4,
    "7-up" => 3
);
arsort($n);
print_r($n);
echo "\n";

$scores = ["John" => 85, "Alice" => 92, "Bob" => 78];
arsort($scores); // Mengurutkan array $scores berdasarkan nilai secara terbalik

// date
$sekarang = date('Y-m-d H:i:s'); // Menghasilkan format tanggal dan waktu lengkap (e.g., "2023-09-16 14:30:00")
$hari = date('l'); // Menghasilkan nama hari dalam seminggu (e.g., "Friday")
$bulan = date('F'); // Menghasilkan nama bulan penuh (e.g., "September")

// date_default_timezone_set()
date_default_timezone_set('Asia/Jakarta'); // Mengatur zona waktu ke Waktu Indonesia Barat

// strtotime()
$time = strtotime("4:00pm December 03 2019");
echo $time;
echo "\n";
echo date('m/d/Y H:i:s a', $time);
echo "\n";

// Mengonversi string tanggal dan waktu menjadi timestamp
$timestamp = strtotime("2023-09-16 14:30:00"); 
echo $timestamp;
echo "\n";


// rand()
echo rand(1, 100);
echo "\n";

$min = 1;
$max = 100;
echo rand($min, $max);
echo "\n";

// mktime()
$targetDays = mktime(0, 0, 0, 07, 19, 2020);
$today = time();
$differenceDays = ($targetDays - $today);
$days = (int)($differenceDays / 86400);
echo "Days till next birthday: " . $days . "days!";