<?php

$maxSpalten = 8;
$maxZeilen  = 8;

?><!DOCTYPE html>
<html>
    <head>
        <title>Schach-WM 2018</title>
        <style>
            td {
                height: 50px;
                width: 50px;
            }
            .black { 
                background-color: #000000;
            }
            .white {
                background-color: #ffffff;
            }
        </style>
    </head>
    <body>
        <table>
            <?php for ($zeile = 0; $zeile < $maxZeilen; $zeile++): ?>
            <tr>
                <?php for ($spalte = 0; $spalte < $maxSpalten; $spalte++): ?>
                    <?php if (($spalte + $zeile) % 2 == 1): ?>
                        <td class="black"></td>
                    <?php else: ?>
                        <td class="white"></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </table>
    </body>
</html>