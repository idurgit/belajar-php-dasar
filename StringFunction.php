<?php 

var_dump(join(" ", ["Jaka", "Kelana", "Umbara"]));
var_dump(join(",", [10,11,12,13,14,15]));

var_dump(explode(",", "10,11,12,13,14,15"));
var_dump(explode(" ", "Jaka Kelana Umbara"));

var_dump(strtolower("Jaka Kelana Umbara"));
var_dump(trim(" Jaka Kelana Umbara "));
var_dump(substr("Jaka Kelana Umbara", 4, 6));
