<?php
// jsonファイルを読み込んで id と各都道府県名（short）を表⽰させる
$json = "./sample.json";
$file = file_get_contents($json);
$file = mb_convert_encoding($file, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($file, true);

$result = [];
foreach($arr[0] as $key => $val){
    $str = "01";
    echo "id". (int)$val["id"]. "は". $val["short"]. "<br>";
}

//下記の形式の配列に値をセットして表⽰させる
//[ "都道府県id" => [市町村名1, 市町村名2...], 
foreach($arr[0] as $key => $val){
    $arr = array();
    foreach($val['city'] as $cities){
        array_push($arr,$cities);
    }
    print_r($arr);
}

?>