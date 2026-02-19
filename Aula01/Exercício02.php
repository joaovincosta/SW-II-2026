<?php
    $n1 = 8;
    $n2 = 7;
    $n3 = 9;
    echo "Nota 1: $n1 <br>";
    echo "Nota 2: $n2 <br>";
    echo "Nota 3: $n3 <br>";
    echo "<br>";
    $i= ($n1 + $n2 + $n3) / 3 ; 
    if ($i >= 8) {
        echo "Média: ".$i." - Aprovado!";
    } else {
        echo "Média: ".$i." - Reprovado!";
    }
?>