<?php

$mehrereWerte = [
    'Hello',
    'world!',
    'How',
    'are',
    'you?',
    'Test',
    'Test',
    'Test',
];

/*
for ($i = 0; $i < count($mehrereWerte); $i++) {
    echo $mehrereWerte[$i] . ' ';
}
*/

foreach ($mehrereWerte as $item) {
    echo $item . ' ';
}