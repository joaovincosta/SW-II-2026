<?php
    // array com 3 produtos
    $json_lista = '
        {"produtos":  
            [
                {"nome":"Milho", "preco":6, "qntd":100},
                {"nome":"Dolly Guaraná", "preco":6, "qntd":70},
                {"nome":"Caixa Paçoquita 10un", "preco":10, "qntd":30}
            ]
        }';

    // conversão do array para JSON com json_encode()
    $produtos = json_encode($json_lista);

    // salvamento do JSON em um arquivo com file_put_contents()
    file_put_contents("produtos.json", $json_lista);
?>