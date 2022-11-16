<?php
$file = "sample.json";
$json = file_get_contents($file); //指定したファイルの要素をすべて取得する
$user = json_decode($config_json, true);//json形式のデータを連想配列の形式にする

$user_data = array(
            'id' => $user['id'],
            'short' => $user['short']
        );

        echo $user_data_['id'];
        echo $user_date['short'];
?>