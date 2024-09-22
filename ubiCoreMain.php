<?php
echo("Loaded ubiCoreMain.<br>");

require_once 'objectsManager.php';
require_once 'ubiObj.php';
require_once './objects/std.php';

// デバイス管理用のインスタンスを作成
$manager = new objectsManager();

// HTTP POSTでデバイスタイプを受け取り、新しいインスタンスを作成
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $objectType = $_POST['device_type'];
    $objectName = $_POST['device_name'];

    if ($objectType === 'Sunscreen') {
        $newObject = new Sunscreen($objectName, $manager);
    } elseif ($objectType === 'Door') {
        $newObject = new Door($objectName, $manager);
    }

    // 新しいデバイスをキューに追加
    $manager->addDevice($newObject);

    // デバイスの処理を実行
    //$newObject->process();
}
?>


