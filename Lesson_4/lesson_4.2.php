<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$minMaxArr = function (array $num): array {
  return [
    'max' => max($num),
    'min' => min($num),
    'avg' => array_sum($num) / count($num),
  ];
};
print_r($minMaxArr($arr));