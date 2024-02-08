<?php

// Opvraag stapels
echo "Hoeveel stapels wil je?" . PHP_EOL;
$stapel = readline();

// Berekening hoeveelheid rijen
for ($i = 0; $i <= $stapel; $i++) {
    // Berekening indentaties
    for ($j = $stapel; $j >= ($i + 1); $j--) {
        echo " ";
    }
    // Berekening hoeveelheid sterren
    for ($l = 1; $l <= $i; $l++) {
        echo "* ";
    }
    echo "" . PHP_EOL;
}

?>