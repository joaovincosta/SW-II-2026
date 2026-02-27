<?php
    $fator = 7;
    echo "Tabuada do " . $fator . "<br><br>";
    
    for ($i=1; $i <=10 ; $i++) { 
        $produto = $fator*$i;
        echo $fator . "X" . $i . " = " . $produto . "<br>";
    }
?>