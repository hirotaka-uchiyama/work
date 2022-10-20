<?php
for ($a = 1; $a <= 9; $a++) {
    for ($i = 1; $i <=9; $i++) {
        $num = $a * $i;
        echo $a. '×' .$i. '=' .$num. '/';
    }
    echo '<br>';
}
?>

<?php
$emp = ['中田' => ['age' => '23','pref' => '東京'], 
    '山本' => ['age' => '19','pref' => '京都'], 
    '佐藤' => ['age' => '30','pref' => '大阪'], 
    '小林' => ['age' => '22','pref' => '福岡'] 
];
$mep_a = [];
foreach($emp as $key => $value) {
    $emp_a[] = ['name' => $key, 'age' => $value['pref']];
}
    print_r($emp_a);
    echo "<br/>"
?>

<?php
echo "3の倍数と3を含む数字<br>";
$num_list =[];
for ($num = 1 ; $num <= 40 ; $num++){
    if ($num % 3 == 0){
        $num_list[] = $num;
    }elseif (strpos((string)$num,"3") !== false){
        $num_list[] = $num;
    }
}
foreach ($num_list as $val){
    echo $val.",";
}
echo "<br/>";
?>

<?php
$emp = ['中田' => ['age' => '23','pref' => '東京'], 
    '山本' => ['age' => '19','pref' => '京都'], 
    '佐藤' => ['age' => '30','pref' => '大阪'], 
    '小林' => ['age' => '22','pref' => '福岡'] 
];
$emp_b =[];
foreach ($emp as $name => $info) {
    print ($key. ':'. $value);
    echo "<br/>";
}
?>