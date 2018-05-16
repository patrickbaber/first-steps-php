<?php

//echo pi();
//echo floor(pi());
//echo ceil(pi());
//echo round(pi(), 2);

$nettoPreis = 17.93;
$mwstFaktor = 1.19;
$bruttoPreis = $nettoPreis * $mwstFaktor;

echo $bruttoPreis;