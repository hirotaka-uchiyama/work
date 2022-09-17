<?php
$array = ['taro','shiro'];
echo $array[1];
?>

<?php
$Array = [
    'name' => 'taro',
    'age' => 20,
];
$Array ['from'] = 'tokyo';
print_r($Array);
?>

<?php
$Array = [
    [
        'name' => 'taro',
        'age' => 20,
        'from' => 'tokyo'
    ],
    [
        'name' => 'jiro',
        'age' => 25,
        'from' => 'osaka'
    ],
    [
        'name' => 'saburo',
        'age' => 30,
        'from' => 'aichi'
    ],
];
print_r($Array);
?>