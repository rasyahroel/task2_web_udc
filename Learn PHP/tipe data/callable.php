<?php
// Tipe data callable digunakan untuk menyimpan referensi ke fungsi atau metode yang dapat dipanggil.
$fungsi = function ($x) {
    return $x * 2;
};

function hello()
{
    echo "Hello, World!";
}

$func = 'hello';  // Variabel func sekarang memiliki referensi ke fungsi hello
$func();  // Memanggil fungsi hello menggunakan variabel callable
echo "\n";

class MyCallable
{
    public function __invoke()
    {
        echo "This is a callable object.";
    }
}

$callableObject = new MyCallable();
$callableObject();  // Memanggil objek callable
