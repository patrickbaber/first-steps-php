<?php

$x = 8;
$y = 8;

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
            <?php for ($i = 0; $i < $y; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < $x; $j++) { ?>
                    <?php if (($j + $i) % 2 == 1) { ?>
                        <td class="black"></td>
                    <?php } else { ?>
                        <td class="white"></td>
                    <?php } ?>
                <?php } ?>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>