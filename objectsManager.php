<?php
//echo("Loaded objectManager.<br>");

class objectsManager {
    public $deviceQueue = [];
    public $messageQueue = [];

     // インスタンスをキューに追加
    public function addDevice($device) {
        $this->deviceQueue[] = $device;
        echo "Added device: " . get_class($device) . "\n";  // デバイスが追加されたことを確認
    }

    // キュー内の特定のクラスのインスタンスを検索
    public function searchDevice($className) {
        echo "Searching for device: " . $className . "\n";  // 検索開始の確認
        foreach ($this->deviceQueue as $device) {
            echo "Checking device: " . get_class($device) . "\n";  // 各デバイスのクラス名を出力
            if (get_class($device) === $className) {
                return true;  // 特定のクラスのインスタンスが見つかれば true を返す
            }
        }
        return false;
    }


    
    // キュー内のインスタンスを5分間保持し、その後消滅
    public function cleanUpQueue() {
        // 実際のタイマー処理をここに追加（省略）
    }
}
?>
