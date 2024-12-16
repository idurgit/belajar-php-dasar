<?php

$names = ["Jaka", "Kelana", "Umbara"];

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . PHP_EOL;
}

foreach ($names as $name) {
    echo $name . PHP_EOL;
}

$person = [
    "name" => "Jaka",
    "age" => 20,
    "address" => "Jakarta",
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
