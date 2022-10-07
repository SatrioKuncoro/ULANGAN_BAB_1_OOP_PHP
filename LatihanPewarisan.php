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
    }

    public function getName(){
        return $this->name;
    }

    public function getLevel(){
        return $this->level;
    }

    public function display(){
        // menampilkan semua nilai
    }
}

class SUbclass extends SuperClass{
    public $type;

    public function __construct($name, $level = 'Medium', $is_status, $type )
    {
        parent::__construct($name, $level = 'easy', $is_status);
    }
}

