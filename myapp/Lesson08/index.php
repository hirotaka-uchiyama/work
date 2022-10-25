<?php
// 平均を繰り返す。
$a = [1, 2, 3];
$result = func($a);
print $result;
echo "<br/>";

// 引数が3つでない。
$a = [1, 2, 3, 4];
$result = func($a);
print $result;
echo "<br/>";

// 引数が数値でない。
$a = ["x", 2, 3];
$result = func($a);
print $result;
echo "<br/>";

function func($a){
    if(count($a)==3){
        if(is_numeric($a[0]) && is_numeric($a[1]) && is_numeric($a[2])){
            return ($a[0]+$a[1]+$a[2])/3;
        }else{
            return "引数が数値でない。";
        }
    }else{
        return "引数が3つでない。";
    }
};

// 1. 以下の２つの配列 $colors1, $colors2 を合体して１つの配列 $colors3 にする。
// 2. $colors3 のすべての文字を小文字に揃える。
// 3. $colors3 配列の最後にもう一つ要素 'black' を追加する。
// 4. $colors3 配列に要素 'green' が存在するかを判定し、存在したら「あり」存在しなければ「なし」と表示する。

$colors1 = ['BLUE', 'RED', 'GREEN'];
$colors2 = ['yellow', 'magenta', 'cyan'];

//1
$colors3 = array_merge($colors1, $colors2);
echo implode(',', $colors3);
echo "<br/>";
//2
$colors3_a = array_map('strtolower' , $colors3);
print_r( $colors3_a );
echo "<br/>";
//3
array_push($colors3_a,"black");
print_r($colors3_a);
echo "<br/>";
//4
if(in_array('green', $colors3_a)) {
    echo 'あり';
}else{
    'なし';
};

?>