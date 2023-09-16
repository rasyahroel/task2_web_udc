<?php 
class Person {
    public $name;
    public $age;

    public function sayHello() {
        echo "Hello, my name is " . $this->name . " and I'm " . $this->age . " years old.";
    }
}

$person1 = new Person();  // Membuat objek dari class Person
$person1->name = "John";
$person1->age = 30;
$person1->sayHello();  // Memanggil metode sayHello() dari objek