<?php
    // Pergunte ao usuário um email (via $_GET ou variável fixa)
     $emailBuscado = $_GET["email"] ?? "teste@email.com";

    // Busque no array de usuários um que tenha esse email.
     $conteudo = file_get_contents("usuarios.json");
    $usuarios = json_decode($conteudo, true);

    $encontrado = false;

    foreach ($usuarios as $usuario) {
        if ($usuario["email"] == $emailBuscado) {
            print_r($usuario);
            $encontrado = true;
            break;
        }
    }

    if (!$encontrado) {
        echo "Usuário não encontrado.";
    }
    
    // Exiba os dados do usuário encontrado ou uma mensagem de erro.
?>