<?php

$waarden = array(10, 3.14, "hallo");


if (is_int($waarden[0])) {
    echo "Waarde 1 is een integer<br>";
} else {
    echo "Waarde 1 is geen integer<br>";
}

if (is_float($waarden[1]) || is_double($waarden[1])) {
    echo "Waarde 2 is een float/double<br>";
} else {
    echo "Waarde 2 is geen float/double<br>";
}

if (is_string($waarden[2])) {
    echo "Waarde 3 is een string<br>";
} else {
    echo "Waarde 3 is geen string<br>";
}

?>