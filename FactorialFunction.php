<?php 

function factorialLoop($value) {
    $total = 1;
    
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    } 

    return $total;
}

var_dump(factorialLoop(5));
var_dump(1 * 2 * 3 * 4 * 5);


function factorialRecursive($value) {
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));

function loop($value) {
    if ($value == 0) {
        echo "End Loop" . PHP_EOL;
    } else {
        echo "Perulangan ke $value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000);