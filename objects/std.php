<?php
class door extends ubiObj {
    public function __construct($name, $queue) {
        parent::__construct($name);

        // キュー内に日焼け止めのインスタンスが存在するか確認
        $sunscreenFound = false;
        foreach ($queue as $device) {
            if ($device instanceof Sunscreen) {
                $sunscreenFound = true;
                break;
            }
        }

        // 結果をECHO
        if ($sunscreenFound) {
            echo "いってらっしゃい\n";
        } else {
            echo "日焼け止めを塗ってから外出しましょう\n";
        }
    }

    public function process($other_device) {
        return "{$this->name} is a door, no specific interaction.";
    }
}
?>
