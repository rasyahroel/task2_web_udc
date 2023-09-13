PHP
=================
- Hypertext Preprocessor
- ServerSide Language
- Collection of data from forms
- CRUD
- Controlling user access
- Encryption of data
- Generating dynamic page content
- Access info typed into a  web form and do something with it, like:
  Send Email
  Navigate to a spesific page based on user input
  Create user account
  Log user in
- Find out browser & OS
- Dispplay alternate web pages to specific users - like mobile users
- Basic & Advanced math
- Create global HTML Templates
- A server is require to run PHP


Ada 2 PHP Native:
- Native Programming (PHP asli dari programmer, menggunakan syntax dasar php)
  => PHP Struktural / PHP Prosedural <==
     --> Menggunakan 1 fungsi tertentu
     --> Terdapat 1 file berisi seluruh fungsi dengan diakses dengan cara memanggil file fungsi untuk memproses 1 fungsi dan dikembalikan lahi nilai programnya
     --> Jumlah file sedikit, seluruh file akan terus berjalan jadi butuh memori lebih banyak
  => OOP PHP <==
     --> Memiliki class program yg terdiri dari encapsulate, nama atribut dan method atau fungsi yang akan digunakan
     --> Menggunakan lebih dari 1 method
- PHP Framework
  => MVC (Model(fungsi db), View(tampilan), Controller(penghubung view ke model))


Installation
=================
- install XAMPP and Vs. Code



Framework PHP
=================
- Laravel
  Framework MVC dapat yang meningkatkan kecepatan web dengan 1 bundle, migrate, dan artisan CLI
- Yii
  framework PHP open-source untuk aplikasi Web modern yang berkembang pesat. Itu dibangun di sekitar pola komposit Model-View-Controller, memiliki alat pembuat code (GII, membuat CRUD)
- CodeIgniter
  framework pengembangan aplikasi yang dapat digunakan untuk mengembangkan situs web menggunakan PHP


Design User Interface
======================
app berbasis web yang digunakan sebagai form untuk interaksi user dan app, membuat prototyping
- Axure, Mockup




=============================================================================================
YII
================

Installation
================
terlebih dahulu install composer
- Instalasi Yii
  - install via composer di xampp\htdocs
    composer create-project --prefer-dist yiisoft/yii2-app-basic basic
  - Nyalakan Apache dan MySQL di XAMPP
  - Running
    php yii serve

- Using GII
  - Cek terlebih dahulu di config\web.php apakah sudah memiliki gii atau tidak
  - ubah dbname di config\db.php dengan db yg digunakan untuk koneksi gii ke db
    'dsn' => 'mysql:host=localhost;dbname=yii_udc',
  - Masuk ke page GII
    http://localhost:8080/index.php?r=gii
  - Jika ingin membuat model pilih Model Generator, masukkan nama tabel berdasarkan db yang dipilih, lalu Generate
  - Untuk CRUD Generator, isi model (harus diawali app\models\namamodel)



=============================================================================================
PHP Dasar
================
- instal web server (XAMPP)


PHP Dasar (CLI)
================
- Buat folder di htdocs, lalu buat file .php
- isi dengan :
  <?php
    echo "Hello World";


Variable and Type data
=============================
- string (strings, word, text)
- int (integer, numbers(not decimals))
- float (floating point numbers(decimals))
- bool (true / false)
- array (array[1,2,3])
- object (  { ... }  )
- null (no value assigned)

  $kata = "This is new word";
  echo $kata;     //string


  $angka = 20;
  echo $angka;    //integer


  $dec = 7.5;
  echo $dec;      //float


  $arr = array('a','b','c');
  print_r($arr);  //Array, menampilkan array menggunakan print_r


  $check = true;
  echo $check;    //boolean


  $check = "Hello";
  $check = null;
  echo $check;    //null`



Define
====================
  define("TITLE","Weclome to my world!");
  echo TITLE;


Operator Aritmatika
====================
  $a = 10;
  $b = 20;
  $hasil = $a + $b;   // + - * / %
  echo $hasil;


Operator Assignment
====================
  // += -=
  $wallet = 500;
  $shoe = 200;
  $wallet -= $shoe;       // wallet - shoe
  echo $wallet;


Operator Comparison
====================
  //  < > <= >= == === != OR <> !==
  // bernilai 1 atau 0, true or false
  $x = 10;
  $y = 2;
  echo $x > $y;


Operator Logic
================
  //  && (bernilai 1, true), || (or), ! (not), xor
  $x = 20;
  $y = 50;
  echo $x > $y && 40 === 40;


Operator String
================
  // concat string
  $a = "Halo";
  $b =  $a . "Selamat Pagi";
  echo $b;


Operator Increment & Decrement
===================================
  // Increment
  $x = 10;
  echo $x++;
  echo "\n";
  echo $x;

  $a = 10;
  echo ++$a;


  // Decrement
  $y = 10;
  echo $y--;
  echo "\n";
  echo $y;

  $b = 10;
  echo --$b;



If Else
================
  $nilai = 85;
  if ($nilai > 70) {
    echo "lulus";
  // tambah kondisi
  } elseif ($nilai <=60 && $nilai>= 50) {
    echo "remedi";
  } else {
    echo "tidak lulus";
  }


Switch Case
================
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


For
================
  for ($i=0; $i < 10; $i++) { 
    echo $i;
  }


Foreach
================
  $moustache = array("Handlebar","Salvador Dali","Fu Manchu");
  foreach ($moustache as $m) {
    echo "I love the $m \n";
  }


While
================
  $i = 1;
  while ($i <= 10) {
    echo $i."\n";
    $i++;
  }


Do While
================
  $i = 1;
  do {
    echo "Number : $i\n";
    $i++;
  } while ($i <= 10);


Resource
================
  <?php 
  $koneksiDatabase = mysqli_connect("localhost", "username", "password", "nama_database");


Callable
================
  $fungsi = function($x) { return $x * 2; };


Array
================
  $motor = ['supra','jupiter','mio','vario'];
atau
  $motor = array('supra','jupiter','mio','vario');
  print_r($motor);
  echo $motor[0];

  
  // menggunakan for
  $jumlah = count($motor);
  for ($i=0; $i < $jumlah; $i++) { 
    echo $motor[$i]."\n";
  }

  
  // mengurutkan array
  $asc = sort($motor);        // urut ascending
  $desc = ksort($motor);      // urut descending
  print_r($asc);
  echo "\n";
  print_r($desc);

  
  // array asosiatif
  $data = array(
    'aku'=> 24,
    'kamu'=> 12
  );
  echo "aku berumur ".$data["aku"];


  // menggunakan looping foreach
  foreach ($data as $subject => $age) {
    echo $subject." berumur ".$age."\n";
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


Function
================
// Camel Case, every word after the first one is a capital => myFunction()
// Lower Case, all lowercase, underscore in between => my_function()
// Pascal Case, every word is capitalized => MyFunction()

  function tambah($a, $b){
    $hasil = $a + $b;
    echo $hasil;
  }
  echo tambah(10,20);

  
  function kata(){
    $kata = "halo";
    echo $kata;
  }
  echo kata();


  // return value at parameter
  $x = 10;
  function add(&$x) {
    $x += 5;
  }


  // looping
  function loop($counter){
    $kata = "halo";
    for ($i = 0; $i <= $counter; $i++) {
        echo $kata;
    }
  }
  loop(10);


  // sort(), urut dari depan
  $dinner = array("Meat","Potatoes","Beans","Rice");
  sort($dinner);
  foreach($dinner as $d){
    echo "$d \n";
  }
  echo "\n";


  // rsort(), urut dari belakang
  rsort($dinner);
  foreach($dinner as $d){
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


Math Function
==========================
  // ceil()
  echo ceil(1.50);


  // floor()
  echo floor(0.50);


  // round()
  echo round(0.54335, 4);


  // exp()
  echo exp(4);


String Function
==========================
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



Array Function
==========================
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
  $cars = array("Volkswagen","Audi","Marcedes");
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


Date, Time, Number Format, and Random Number Functions 
============================================================
// Date
// 'd' = Day
// 'j' = Day without zeros
// 'D' = Day of week (3 letters)
// 'l' = Full day of the week
// 'm' = Month as a number with zeros
// 'n' = Month as a number without zeros
// 'M' = Month (3 letters)
// 'F' = Full Month
// 'y' = Two digit year
// 'Y' = Full year

// Time
// 'g' = Hours in 12-hours format without zeros
// 'h' = Hours in 12-hours format with zeros
// 'G' = Hours in 24-hours format without zeros
// 'H' = Hours in 24-hours format with zeros
// 'a' = am/pm in lowercase
// 'A' = am/pm in uppercase
// 'i' = minutes without leading zeros
// 's' = seconds without leading zeros

  <?php 
  echo date('d M Y H:i:s');       // date
  echo "\n";


  // date_default_timezone_set()
  date_default_timezone_set('Asia/Jakarta');


  // mktime()
  $targetDays = mktime(0, 0, 0, 07, 19, 2020);
  $today = time();
  $differenceDays = ($targetDays - $today);
  $days = (int)($differenceDays / 86400);
  echo "Days till next birthday: " . $days . "days!";


  // strtotime()
  $time = strtotime("4:00pm December 03 2019");
  echo $time;
  echo date('m/d/Y H:i:s a', $time);


  $harga = 1000000;
  echo number_format($harga)      // format number


  // rand()
  echo rand(1, 100);

  $min = 1;
  $max = 100;
  echo rand($min, $max);


SuperGlobal : $GLOBALS
========================
  $x = 100;
  $y = 200;
  function add()
  {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
  }
  add();
  echo $z;


SuperGlobal : $_GET
========================
  <form action="get.php" method="get">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
  </form>

  // hasil setelah diklik login akan berubah link dengan apa yang diisi
  http://localhost/latihanphp_udc/get.php?username=rasya&password=123



SuperGlobal : $_POST
========================
  <?php
  print_r($_POST)
  ?>

  <form action="post.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
  </form>


SuperGlobal : $_SESSION
=========================
  <?php
    session_start();

    $_SESSION["Name"] = "Roy";
    $_SESSION["Age"] = 24;

    echo "Hello " . $_SESSION["Name"];
    session_destroy();
  ?>


SuperGlobal : $_COOKIES
=========================
  // setcookie(name, value, expiration, path, domain, secure, httponly);
  setcookie("user", "Rasya", time() + 86400 * 30);
  print_r($_COOKIE);


SuperGlobal : $_FILES
=========================
  if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tempExtension = explode('.', $name);

    $fileExtension = strtolower(end($tempExtension));

    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 30000) {
                $newFileName = uniqid('', true) . "." . $fileExtension;
                $fileDestination = "upload_files_superglobals/" . $newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
                header("Location: files.php?uploadedsuccess");
            } else {
                echo "Sorry, your file size is too big!";
            }
        } else {
            echo "Sorry, there was an error! Try it again";
        }
    } else {
        echo "Sorry, your file type is not accepted";
    }
  }


  <form action="files.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="submit">SUBMIT</button>
  </form>


Include, Require
================
  include 'function.php';         // panggil fungsi yang ada di file function.php
  echo tambah(10, 20);
  
  
  include_once 'function.php';    // panggil fungsi yang ada di file function.php
  echo tambah(10, 20);


  require 'function.php';
  echo tambah(10, 20);


Explode, Implode
================
  $kata = "Hallo Selamat Pagi";
  $exp = explode(' ', $kata);     // untuk memisahkan 1 kalimat
  echo $exp[2];

  // untuk menyatukan kata yang telah terpisah menjadi 1 kalimat dengan penghubung
  echo implode(' ',$exp);


File Handling
================
  // membaca isi file
  echo readfile('Task 2\php.txt');

  // r untuk read file
  $file = fopen('Task 2\php.txt','r') or die('File not found');
  echo fread($file, filesize('Task 2\php.txt'));
  fclose($file);

  // w untuk write file
  $file = fopen('Task 2\php.txt','w') or die('File not found');
  $kata = "Tambahan kata";
  fwrite($file, $kata);
  fclose($file);


  // Create and write to a file
  <?php
    if (isset($_POST['submit'])) {
        $myFile = fopen("Task 2/php.txt", "w");                   // bisa juga dengan "a"
        $txt = "My age is " . $_POST['age'] . "\n";
        fwrite($myFile, $txt);
        fclose($myFile);
    }
  ?>

  <form action="fileput.php" method="post">
      <input type="text" name="age">
      <input type="submit" name="submit">
  </form>


  // Read from a file
  $filePath = "Task 2/php.txt";
  $output = file_get_contents($filePath);
  // echo $output;
  $ages = explode("\n", $output);
  $totalAge = 0;
  $i = 0;
  foreach ($ages as $age) {
    echo $age;
    $totalAge += $age;
    $i++;
  }
  echo "The average age is " . ($totalAge / $i);
