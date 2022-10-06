<?php
class Motor {
    // 3 attribute
    public $name, $id_machine, $type;

    public function __construct($name, $id_machine, $type = 'automatic'){
        $this->name = $name;
        $this->id_machine = $id_machine;
        $this->type = $type;
    }

    public function getName(){
        return $this->name;
    }

    public function getIdMachine(){
        return $this->id_machine;
    }

    public function getType(){
        return $this->type;
    }

    public function display(){
        echo 'Nama: ' . $this->getName() .'<br>';
        echo 'ID Mesin: ' . $this->getIdMachine() . '<br>';
        echo 'Type Motor: ' . $this->getType() . '<br>';
        echo '<hr>';
    }
}

$obj1 = new Motor(name: 'Vario', id_machine: 1245);
$obj2 = new Motor(name: 'CB 250', id_machine: 3421, type: 'sport');

echo $obj1->display();
// output
// Nama: Vario
// ID Mesin: 1245
// Type Motor: automatic


echo $obj2->display();
// Nama: CB 250
// ID Mesin: 3421
// Type Motor: sport

