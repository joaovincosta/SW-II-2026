<?php
    // Leia o JSON do arquivo produtos.json e o converta para um array
    $conteudo = file_get_contents("produtos.json");
    $produtos = json_decode($conteudo, true);

    // Adicione um novo produto ao array
    

    // Converta o array atualizado para JSON e salve de volta no arquivo
    $conteudo = json_encode($produtos);
?>