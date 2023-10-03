<?php

if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
    $n = intval($_GET['nombre1']);
    $p = intval($_GET['nombre2']);


    function table()
    {
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                echo str_pad($i * $j, 4, " ");
            }
            echo "\n";
        }
    }

    echo table();
}