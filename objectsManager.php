<?php
class objectsManager {
    public $deviceQueue = [];

    // インスタンスをキューに追加
    public function addDevice($device) {
        $this->deviceQueue[] = $device;
    }

    // キュー内の特定のクラスのインスタンスを検索
    public function searchDevice($className) {
        foreach ($this->deviceQueue as $device) {
            if ($device instanceof $className) {
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
