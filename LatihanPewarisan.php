<?php
class SuperClass{
// memiliki 4 attribute
    public $name, $level, $is_status;
    public static $index;

    public function __construct($name, $level = 'easy', $is_status)
    {
        $this->name = $name;
        $this->level = $level;
        $this->is_status = $is_status;
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

class SUbclass extends SuperClass{
    public $type;

    public function __construct($name, $level = 'Medium', $is_status, $type )
    {
        parent::__construct($name, $level = 'easy', $is_status);
    }
}

$obj1 = new SuperClass(name: 'Superclass', is_status: false);
echo $obj1->display();
