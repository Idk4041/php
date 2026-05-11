<?php

$leeftijd = 17;
$ticketGekocht = true;

if ($ticketGekocht == false) {
    echo "Toegang geweigerd. Je hebt een ticket nodig.";
} else {
    if ($leeftijd > 18) {
        echo "Toegang verleend.";
    } else {
        echo "Toegang verleend, maar je moet je ouders meenemen.";
    }
}

?>