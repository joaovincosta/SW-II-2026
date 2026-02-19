<?php
    for ($i=1; $i <= 20; $i++) { 
        if ($i % 2 == 0){
            echo "Valor: " . $i . " <br>";
        }
    }

    // ADICIONAL
    echo "<br>";
    for ($i=1; $i <= 30; $i++) { 
        if ($i % 2 == 0){
            echo "Valor: " . $i . " -> PAR <br>";
        } else {
            echo "Valor: " . $i . " -> ÍMPAR <br>";
        }
    }

?>