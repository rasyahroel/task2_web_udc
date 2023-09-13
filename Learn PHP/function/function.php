<?php
function tambah($a, $b)
{
    $hasil = $a + $b;
    echo $hasil;
}
echo tambah(10, 20);
echo "\n";

// return value at parameter
$x = 10;
function add(&$x)
{
    $x += 5;
}

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
    $kata = "halo";
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

// ceil()
echo ceil(1.50);

// floor()
echo floor(0.50);

// round()
echo round(0.54335, 4);

// exp()
echo exp(4);

// strlen()
$str = "Hello world";
echo strlen($str);

// str_word_count()
$fname = "Welcome to my world";
echo str_word_count($fname);

// strpos()
$email = 'email@email.com';
if (strpos($email, "@")) {
    echo "This is a valid email";
} else {
    echo "This is a email input field";
}

// ucwords()
echo ucwords("what is your name?");

// strtoupper()
echo strtoupper("what is your name?");

// strtolower()
echo strtolower("what is your name?");

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
}
print_r($z);

// array_keys()
print_r(array_keys($z));

// array_values()
print_r(array_values($z));

// array_push()
$cars = array("Volkswagen", "Audi", "Marcedes");
array_push($cars, "Volvo");
print_r($cars);

// array_search()
echo array_search("Volvo", $cars);

// count()
echo count($cars);

// arsort()
$n = array(
    "Milk" => 2,
    "Cheese" => 4,
    "7-up" => 3
);
arsort($n);
print_r($n);

// date_default_timezone_set()
date_default_timezone_set('Asia/Jakarta');

// strtotime()
$time = strtotime("4:00pm December 03 2019");
echo $time;
echo date('m/d/Y H:i:s a', $time);

// rand()
echo rand(1, 100);

$min = 1;
$max = 100;
echo rand($min, $max);

// mktime()
$targetDays = mktime(0, 0, 0, 07, 19, 2020);
$today = time();
$differenceDays = ($targetDays - $today);
$days = (int)($differenceDays / 86400);
echo "Days till next birthday: " . $days . "days!";