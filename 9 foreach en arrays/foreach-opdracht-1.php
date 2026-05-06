<?php

$garage = [
    [
        "merk" => "BMW",
        "kleur" => "zwart",
        "kmstand" => 120000
    ],
    [
        "merk" => "Audi",
        "kleur" => "grijs",
        "kmstand" => 85000
    ]
];

foreach ($garage as $auto) {
    echo "Merk: " . $auto["merk"] . "<br>";
    echo "Kleur: " . $auto["kleur"] . "<br>";
    echo "Kmstand: " . $auto["kmstand"] . "<br><br>";
}

?>