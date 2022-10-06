<?php
class Motor {
    // 3 attribute
    public $name, $id_machine, $type;

    public function __construct($name, $id_machine, $type = 'automatic'){
        $this->name = $name;
        $this->id_machine = $id_machine;
        $this->type = $type;
    }
}