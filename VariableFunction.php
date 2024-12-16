<?php 

function foo() {
    echo "Foo" . PHP_EOL;
} 

function bar() {
    echo "Bar" . PHP_EOL;
} 

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

function sampleFunction(string $name) {
    return "Sample $name";
}

function sayHello(string $name, $filter) { 
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}



sayHello("Eko", "sampleFunction");
sayHello("Eko", "strtoupper"); 
sayHello("Eko", "strtolower");