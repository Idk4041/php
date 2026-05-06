<?php

$prijsZonderBtw = 50;
$btwPercentage = 0.21;
$btwBedrag = $prijsZonderBtw * $btwPercentage;

$prijsMetBtw = $prijsZonderBtw + $btwBedrag;

echo "Btw bedrag: €" . $btwBedrag . "<br>";
echo "Totale prijs: €" . $prijsMetBtw;

?