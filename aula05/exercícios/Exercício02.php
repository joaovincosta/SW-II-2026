<?php
    // Leia o arquivo usuarios.json usando file_get_contents()
    $conteudo = file_get_contents("usuarios.json");

    // Converta o JSON em um array PHP com json_decode()
    $usuarios = json_decode($conteudo, true);

    // Exiba os nomes e emails de todos os usuários
    print_r($usuarios); 
?>