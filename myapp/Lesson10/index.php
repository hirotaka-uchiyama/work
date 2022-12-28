<?php
// jsonファイルを読み込んで id と各都道府県名（short）を表⽰させる
//下記の形式の配列に値をセットして表⽰させる
//[ "都道府県id" => [市町村名1, 市町村名2...], 
$json = "./sample.json";
$file = file_get_contents($json);
$file = mb_convert_encoding($file, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($file, true);

$result = [];
foreach($arr[0] as $key => $val){
    $str = "01";
    echo "id". (int)$val["id"]. "は". $val["short"]. "<br>";
}

$city_data = [];
foreach ($arr as $key => $val) {
    foreach($val as $key2 => $val2){
    $name = $val2['name'];
    $id = $val2['id']; 
    }
}

var_dump($city_data);


$city1 = array_column($arr, 'key');
foreach($city1 as $id){
    print $id .PHP_EOL;
}

