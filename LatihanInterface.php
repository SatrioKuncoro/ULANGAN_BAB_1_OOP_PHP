<?php

interface DisplayService{
    // memiliki 1 function
    public function display();
}

abstract class Motor implements DisplayService{
    public static $index;
    public $name;

    public function __construct(
        public String $machine_number,
        public String $type,
        public String $type_cilinder,
        public String $colour,
        )
    {
        self::$index = 1;
        $this->name = static::class;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNoMachine():int 
    {
        return $this->machine_number;
    }

    public function getType():String 
    {
        return $this->type;
    }

    public function getColour():String 
    {
        return $this->colour;
    }

    public function getTypeCilinder(): int
    {
        return $this->type_cilinder;
    }

    public function getSpace(){
        echo '<hr>';
    }

    public function display()
    {
        echo 'No.' . self::$index++ . '<br>';
        echo 'Nama: ' . $this->getName() . '<br>';
        echo 'No Mesin: ' . $this->getNoMachine() . '<br>';
        echo 'Type: ' . $this->getType() . '<br>';
        echo 'CC Cilinder: ' . $this->getTypeCilinder() . '<br>';
        $this->getSpace(); 
    }
}

class Vario extends Motor {

}

class Sonic extends Motor{

}

// inisialisasi class objek
$vario1 = new Vario(machine_number: 123, type: 'Sport', type_cilinder: 125, colour: 'White');
$vario2 = new Vario(machine_number: 4523, type: 'sport', type_cilinder: 150, colour: 'Black');
$sonic = new Sonic(machine_number:54232, type: 'Sport', type_cilinder: 150, colour: 'red');

// menampilkan semua data melalui function
echo $vario1->display();
echo $vario2->display();
echo $sonic->display();