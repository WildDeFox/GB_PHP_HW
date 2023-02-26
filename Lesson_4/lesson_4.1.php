<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$func = fn($a) => ($a % 2 === 0) ? 'четное' : 'нечетное';
$arr2 = array_map($func, $arr);
print_r($arr2);