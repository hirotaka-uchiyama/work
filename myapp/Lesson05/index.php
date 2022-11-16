<?php
$number = mt_rand(1,10);

echo $number;

if ($number % 2 == 0) {
    echo '偶数';
} else {
    echo '奇数';
}

?>

<?php
$test = mt_rand(1,100);

switch ($test) {
    case $test >= 0 && $test <= 49:
        echo '不可';
        break;

    case $test >= 50 && $test <= 69:
        echo '可';
        break;

    case $test >= 70 && $test <= 79:
        echo '良';
        break;

    case $test >= 80 && $test <= 99:
        echo '優';
        break;
        if ($test == '100') {
            echo '満点';
} 

if ($test == '100') {
    echo '満点';
}

?>

<?php

$math = mt_rand(1,100);
$english = mt_rand(1,100);

if ($math >= 60 && $english >= 60) {
    echo "合格";
        }elseif ($math + $english >= 130) {
            echo "合格";
                }elseif ($math + $english >= 100 && $math || $english >= 90) {
                    echo "合格";
                        }else {
                            echo "不合格";
                        }
}
?>