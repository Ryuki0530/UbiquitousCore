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

        if ($this->weatherInfo->getWeather() === 5) {
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

    public function __construct($name, $manager, $weatherInfo ) {
        parent::__construct($name);
        $this->manager = $manager;
        $this->weatherInfo = $weatherInfo;
        echo "Sunscreen\n";

        if ($this->weatherInfo->getWeather() === 5) {
            echo"今日は非常に日差しが強いです。帽子や日傘も用意しましょう。";
        }else if($this->weatherInfo->getWeather() === 0) {
            echo "今日は晴れです。帽子もあった方がいいでしょう。\n";
        }else{
            echo "今日はあまり日差しが強くないようです。\n";
        }
    }
}
