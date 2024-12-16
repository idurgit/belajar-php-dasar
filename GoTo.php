<?php 


echo "Hello World" . PHP_EOL;

$counter = 1;

while (true) {
    echo "Perulangan ke $counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "Loop End" . PHP_EOL;