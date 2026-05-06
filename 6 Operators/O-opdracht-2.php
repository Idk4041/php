<?php

$saldo = 1000;
$maandInleg = 50;
$maanden = 12;
$saldo += $maandInleg * $maanden;
$rente = $saldo * 0.05;

$eindSaldo = $saldo + $rente;

echo "Eindsaldo na 1 jaar: €" . $eindSaldo;

?>