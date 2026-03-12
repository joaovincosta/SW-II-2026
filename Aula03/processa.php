<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $anoatual = date('Y');
        $anonasc = $anoatual - $idade;
    ?>
    <p>O nome é: <?php echo $nome ?></p>
    <p>A idade é: <?php echo $idade ?></p>
    <p>O email é: <?php echo $email ?></p>
    <p>Seu ano de nascimento é: <?php echo $anonasc ?></p>
    <?php
        if ($idade >= 18) {
            echo "<p style='color: red'>VOCÊ É MAIOR DE IDADE</p>";
        } else
            echo "<p style='color: blue'>VOCÊ É MENOR DE IDADE</p>";

        echo "<h1>Lista de Clientes</h1>";
        echo "<ul>";
        // LAÇO
        for ($i=1; $i <= 3 ; $i++) { 
            echo "<li>Cliente $i</li>";
        }
        echo "</ul>";
    ?>

    <!-- <h1>Lista de Clientes</h1>
    <ul>
        <li>Cliente 1</li>
        <li>Cliente 2</li>
        <li>Cliente 3</li>
    </ul> -->

</body>
</html>