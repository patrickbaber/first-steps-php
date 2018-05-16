<?php

//echo pi();
//echo floor(pi());
//echo ceil(pi());
//echo round(pi(), 2);

$nettoPreis  = 15.45;
$mwstFaktor  = 1.07;
$bruttoPreis = $nettoPreis * $mwstFaktor;
$gerundeterBruttoPreis = round($bruttoPreis, 2);
$deutscherPreis = str_replace('.', ',', $gerundeterBruttoPreis);
$preis = $deutscherPreis . ' €';

echo $preis;