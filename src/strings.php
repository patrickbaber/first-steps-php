<?php

$zeichenkette = '  Dies ist ein Test  ';
//$bearbeitet = trim($zeichenkette);
//$bearbeitet = ltrim($zeichenkette);
//$bearbeitet = rtrim($zeichenkette);
//$bearbeitet = substr($zeichenkette, 0, 5);
//$bearbeitet = strpos($zeichenkette, 'ein');
//$bearbeitet = strstr($zeichenkette, 'ein');
//$bearbeitet = str_replace('Test', 'Versuch', $zeichenkette);
$bearbeitet = str_replace('.', ',', 19.99);

var_dump($bearbeitet);
//echo $bearbeitet . ' €';