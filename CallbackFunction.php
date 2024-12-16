<?php 

function sayHello(string $name, callable $filter) { 
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Eko", "strtoupper"); 
sayHello("Eko", "strtolower");

sayHello("Eko", function (string $name) {
    return strtoupper($name);
}); 
sayHello("Eko", fn($name) => strtolower($name));
