<?php
//このコードはスタブです。


/*weatherInfoクラス
getWeatherで天気情報を取得可能
引数時間後の天気を表示
引数無し→現在の天気
*/
class weatherInfo extends ubiObj{
    private $manager;
    public function __construct() {
        echo("weatherInfo Start \n");
    }
    
    public function getWeather(){
        $ans = 1;
        return $ans;
    }

    public function dumpWeather(){
        echo("Sunny 27℃/21℃");
    }
}
?>