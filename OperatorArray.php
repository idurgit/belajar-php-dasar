<?php 

$first = [
    "first_name" => "Jaka"
];

$last = [
    "last_name" => "Kelana"
];

$full = $first + $last;

var_dump($full);  
echo "\n";

$a = [
    "first_name" => "Jaka",
    "last_name" => "Kelana"
];

$b = [
    "last_name" => "Kelana",
    "first_name" => "Jaka"
];

var_dump($a == $b); 
var_dump($a === $b);

?>