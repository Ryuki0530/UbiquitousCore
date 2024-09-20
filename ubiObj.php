<?php
class ubiObj {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function process($other_device) {
        // Override in subclasses
    }
}
