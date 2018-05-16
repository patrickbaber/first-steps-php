<?php

$istGeschaeftskunde = false;

$mwstFaktor = ($istGeschaeftskunde == true) ? 1 : 1.19;

echo 10.00 * $mwstFaktor;