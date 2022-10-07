<?php

class SuperClass{
// memiliki 4 attribute

    public static $index;

    public function __construct(public $level = 'easy', public $is_status, public $name = __CLASS__)
    {
        self::$index = 1;
    }

    public function getName(){
        return $this->name;
    }

    public function getLevel(){
        return $this->level;
    }

    public function getIsStatus(){
        return $this->is_status;
    }

    public function display(){
        // menampilkan semua nilai
        echo 'No.' . self::$index++ . '<br>';
        echo 'Nama: ' . $this->getName() . '<br>';
        echo 'Level: ' . $this->getLevel() . '<br>';
        echo 'Status: ' . $this->getIsStatus() . '<br>';
    }
}

class SubClass extends SuperClass{

    public function __construct(public $level, public $is_status, public String $type = "Pewarisan", public $name = __CLASS__)
    {
        parent::__construct($level = 'Medium', $is_status, $name);
    }

    public function getType(){
        return $this->type;
    }

    public function displaySubClass(){
        $this->display();
        echo 'Type: ' . $this->getType() . '<br>';
    }
}


$obj1 = new SuperClass(level: 'easy', is_status: false);
echo $obj1->display();
$obj2 = new SubClass(level: 'Medium', is_status: true, );
echo $obj2->displaySubClass();
