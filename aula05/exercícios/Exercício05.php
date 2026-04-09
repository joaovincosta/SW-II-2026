<?php
    // Leia os produtos do arquivo produtos.json
    $conteudo = file_get_contents("produtos.json");
    $produtos = json_decode($conteudo, true);

    $nomeRemover = "Milho";

    // Novo array sem o produto removido
    $novaLista = [];

    foreach ($produtos["produtos"] as $produto) {
        if ($produto["nome"] != $nomeRemover) {
            $novaLista[] = $produto;
        }
    }

    // Atualiza o array principal
    $produtos["produtos"] = $novaLista;

    // Salva no arquivo
    $conteudo = json_encode($produtos, JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $conteudo);
?>