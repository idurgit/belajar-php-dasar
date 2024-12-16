<?php 

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Eko"); 
$sayHello("Jaka");

function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name); 
    echo "Good Bye $finalName" . PHP_EOL;
}
sayGoodBye("Eko", function (string $name) {
    return strtoupper($name);
});

$filterFunction = function (string $name) {
    return strtolower($name); 
}; 
sayGoodBye("Eko", $filterFunction);

$firstName = "Jaka";
$lastName = "Kelana";

$sayHello = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHello();