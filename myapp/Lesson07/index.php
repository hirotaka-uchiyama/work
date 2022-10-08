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
foreach($emp as $key1 => $value1) {
    echo "name".":".$key1.'<br/>';
foreach ($value1 as $key2 => $value2) {
    echo $key2. ":" .$value2.'</div>';
}
}
?>

<?php
for ($a = 1; $a <= 40; $a++) {
    
}