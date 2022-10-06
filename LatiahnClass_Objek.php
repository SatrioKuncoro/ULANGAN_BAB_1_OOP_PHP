<?php

// buat sebuah class Human
class Human {

    // memiliki 4 attribute
    public $name;
    public $age;
    public $major;
    public $is_active;
}

$obj = new Human();
$obj->name = 'Hasudungan';
$obj->age = 25;
$obj->major = 'Rekayasa Perangkat Lunak';
$obj->is_active = true;

echo 'Name: ' . $obj->name . '<br>';
echo 'Umur: ' . $obj->age . '<br>';
echo 'Jurusan: ' . $obj->major . '<br>';
echo 'Aktif: ' . $obj->is_active . '<br>';