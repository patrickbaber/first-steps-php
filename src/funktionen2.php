<?php

function preisFormattierung($nettoPreis, $mwstFaktor)
{
    // der Nettopreis unter 20 € ist...
    if ($nettoPreis < 20) {
        //... dann 5 € dazu addieren
        $nettoPreis = $nettoPreis + 5;
    }
    $bruttoPreis = $nettoPreis * $mwstFaktor;
    $gerundeterBruttoPreis = round($bruttoPreis, 2);
    $deutscherPreis = str_replace('.', ',', $gerundeterBruttoPreis);
    $preis = $deutscherPreis . ' €';
    return $preis;
}

echo preisFormattierung(10.346782346, 1.19) . '<br>';
echo preisFormattierung(20.346782346, 1.07) . '<br>';
echo preisFormattierung(30.346782346, 1.19) . '<br>';
echo preisFormattierung(40.346782346, 1.07) . '<br>';