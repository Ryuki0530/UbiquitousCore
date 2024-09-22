<?php
echo("Loaded ObjectsSuperClass.<br>");

//仮想IoTオブジェクトの雛型
class ubiObj {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function process($other_device) {
        // Override in subclasses
    }
}
