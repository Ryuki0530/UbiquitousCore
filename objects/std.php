<?php
//echo("Loaded standard objects.<br>");

// ドア
class Door extends ubiObj {
    private $manager;

    public function __construct($name, $manager,$weatherInfo ) {
        parent::__construct($name);
        $this->manager = $manager;
        $this->weatherInfo = $weatherInfo;
        
        echo "Door\n";

        if ($this->weatherInfo->getWeather(6) === 5) {
            // キュー内に Sunscreen があるか確認
            if ($this->manager->searchDevice('Sunscreen')) {
                echo "いってらっしゃい\n";
            } else {
                echo "日焼け止めを塗ってから外出しましょう\n";
            }
        }
        else{
            echo "いってらっしゃい\n";
        }
    }
}

// 日焼け止め
class Sunscreen extends ubiObj {
    private $manager;

    public function __construct($name, $manager) {
        parent::__construct($name);
        $this->manager = $manager;
        echo "Sunscreen\n";
    }
}
