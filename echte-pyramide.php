<?php

echo "Hoeveel stapels wil je?" . PHP_EOL;
$stapel = readline();

for ($i = 0; $i > $stapel; $i++) {
    for ($j = $stapel; $j > ($i + 1); $j--) {
        echo " ";
    }
    for ($l = 0; $l <= $i; $l++) {
        echo "* ";
    }
    echo "" . PHP_EOL;
}

?>