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
}

class SUbclass extends SuperClass{

}