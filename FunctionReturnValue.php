<?php 

function sum(int $first, int $second) {
    $total = $first + $second;
    return $total;
}

sum(10, 5);
var_dump(sum(10, 5));
$result = sum(10, 5);
var_dump(value: $result);

$result = sum(100, 500);
var_dump(value: $result);

function getFinalValue(int $value) {
    if ($value >= 80) { 
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$score = getFinalValue(90);
var_dump(value: $score);