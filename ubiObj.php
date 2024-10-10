<?php
//echo("Loaded ObjectsSuperClass.<br>");

//仮想IoTオブジェクトの雛型
class ubiObj {
    public $name;
    public $createdTime;
    public $expiryTime = 300;

    public function __construct($name) {
        $this->name = $name;
        $this->createdTime = time(); 
    }

    public function isExpired(){
        $currentTime = time();
        return ($currentTime - $this->createdTime) > $expiryTime;
    }

    public function process($other_device) {
        // Override in subclasses
    }
}

class deviceMessage{
    public $attn;
    public $body; 
}