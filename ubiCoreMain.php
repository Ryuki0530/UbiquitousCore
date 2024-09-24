<?php
//echo("Loaded ubiCoreMain.<br>");

require_once 'objectsManager.php';
require_once 'ubiObj.php';
require_once './objects/std.php';
require_once './objects/stabs.php';

session_start();  // セッションを開始

$weatherInfo = new weatherInfo();

// 既存のオブジェクトマネージャがセッションにある場合はそれを使用
if (isset($_SESSION['manager'])) {
    $manager = $_SESSION['manager'];
    echo "Loaded manager from session.<br>";
} else {
    $manager = new objectsManager();
    echo "Created new manager.<br>";
}

// HTTP POSTでデバイスタイプを受け取り、新しいインスタンスを作成
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $objectType = $_POST['device_type'];
    $objectName = $_POST['device_name'];

    echo "Received POST data: device_type = $objectType, device_name = $objectName<br>";

    if ($objectType === 'Sunscreen') {
        $newObject = new Sunscreen($objectName, $manager);
    } elseif ($objectType === 'Door') {
        $newObject = new Door($objectName, $manager, $weatherInfo);
    }

    // 新しいデバイスをキューに追加
    $manager->addDevice($newObject);
}

// オブジェクトマネージャをセッションに保存
$_SESSION['manager'] = $manager;


?>


