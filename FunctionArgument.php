<?php 

function sayHello($name = "Anonim") {
    echo "Hello $name" . PHP_EOL;
}

sayHello("Jaka");  
sayHello("Eko");  
sayHello();

function sum(int $first, int $second) {
    $result = $first + $second;
    echo "Hasil dari $first + $second = $result" . PHP_EOL;
}

sum(10, 5);
sum(10, "5");

// function sumAll(array $values) {
//     $total = 0;
//     foreach ($values as $value) {
//         $total += $value;
//     }
//     echo "Total " . implode(" , ", $values) . " = $total" . PHP_EOL;
// }

// sumAll([1, 2, 3, 4, 5]);

function sumAll(... $values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" , ", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);

$values = [1, 2, 3, 4, 5];
sumAll(... $values);