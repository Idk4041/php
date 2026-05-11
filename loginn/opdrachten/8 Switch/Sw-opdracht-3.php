<?php

$cijfer = 8;

switch (true) {

    case ($cijfer >= 9 && $cijfer <= 10):
        echo "Uitstekend";
        break;

    case ($cijfer >= 7 && $cijfer <= 8):
        echo "Goed";
        break;

    case ($cijfer >= 5 && $cijfer <= 6):
        echo "Voldoende";
        break;

    case ($cijfer >= 0 && $cijfer <= 4):
        echo "Onvoldoende";
        break;

    default:
        echo "Ongeldig cijfer";
}

?>