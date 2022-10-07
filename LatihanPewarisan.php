<?php

class SuperClass{
// memiliki 4 attribute

    public static $index;

    public function __construct(
        public $level = 'easy', 
        public $is_status, 
        public int $age, 
        public $name = __CLASS__
        )
    {
        self::$index = 1;
    }

    public function getName(){
        return $this->name;
    }

    public function getLevel(){
        return $this->level;
    }

    public function getAge(){
        return $this->age;
    }

    public function getIsStatus(){
        return $this->is_status;
    }

    public function space(){
        echo '<hr>';
    }

    public function display(){
        // menampilkan semua nilai
        echo 'No.' . self::$index++ . '<br>';
        echo 'Nama: ' . $this->getName() . '<br>';
        echo 'Level: ' . $this->getLevel() . '<br>';
        echo 'Status: ' . $this->getIsStatus() . '<br>';
            if($this->age >= 15){
                $this->space();
        }else{
            // $this->space();
        }
    }
}

class SubClass extends SuperClass{

    public function __construct(
        public $level, 
        public $is_status, 
        public int $age,
        public $name = __CLASS__,
        public $type = "Pewarisan", 
        )
    {
        parent::__construct(
            $level = 'Medium', 
            $is_status,
            $age,
            $name,
        );
    }

    public function getType(){
        return $this->type;
    }

    public function displaySubClass(){
        $this->display();
        echo 'Type: ' . $this->getType() . '<br>';
        $this->space();
    }
}


$obj1 = new SuperClass(level: 'easy',age:35, is_status: false);
echo $obj1->display();
$obj2 = new SubClass(level: 'Medium',age: 12, is_status: true,);
echo $obj2->displaySubClass();
