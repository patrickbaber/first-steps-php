<?php

function preisFormattierung($nettoPreis, $mwstFaktor)
{
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