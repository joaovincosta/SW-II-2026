<?php
    $canal = 3;
    switch ($canal) {
        case 1:
            echo "Você está no canal do SBT";
            break;
        case 2:
            echo "Você está no canal da Globo";
            break;
        case 3:
            echo "Você está no canal da Record";
            break;
        case 4:
            echo "Você está no canal da Band";
            break;
        default:
            echo "Esse canal é inválido";
            break;
    }
?>