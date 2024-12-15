<?php

$values = array(10, 9, 8, 7.5, "jaka");
var_dump($values);

$names = ["jaka", "kelana", "umbara"];
var_dump($names);

var_dump($names[0]);
var_dump($names[1]);

$names[0] = "Eko";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);
var_dump(count($names));

$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 20,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia",
    )
);

var_dump($eko);
var_dump($eko["name"]);


$jaka = [
    "id" => "jaka",
    "name" => "Jaka Kelana",
    "age" => 25,
    "address" => [
        "city" => "Bandung",
        "country" => "Indonesia",
    ]
];

var_dump($jaka);

var_dump($eko["address"]["city"]);
var_dump($jaka["address"]["city"]);