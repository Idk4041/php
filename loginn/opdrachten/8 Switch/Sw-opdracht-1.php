<?php

$dag = "dinsdag";

switch ($dag) {
    case "maandag":
        echo "Het is maandag, begin van de week!";
        break;

    case "dinsdag":
        echo "Het is dinsdag, midden van de week!";
        break;

    case "woensdag":
        echo "Het is woensdag, midden van de week!";
        break;

    case "donderdag":
        echo "Het is donderdag, bijna weekend!";
        break;

    case "vrijdag":
        echo "Het is vrijdag, bijna weekend!";
        break;

    case "zaterdag":
        echo "Het is zaterdag, weekend!";
        break;

    case "zondag":
        echo "Het is zondag, rustdag!";
        break;

    default:
        echo "Ongeldige dag ingevoerd.";
}

?>