<?php
echo("Loaded standard objects.<br>");

//仮想IoTオブジェクトのプロパティ

//ドア
class Door extends ubiObj {
    public function __construct(){
        echo "Door\n";
        if ($this->manager->searchDevice('Sunscreen')) {
            echo "いってらっしゃい\n";
        } else {
            echo "日焼け止めを塗ってから外出しましょう\n";
        }
    }
}

//日焼け止め
class Sunscreen extends ubiObj {
    public function __construct(){
        echo "Sunscreen\n";
    }
}
?>