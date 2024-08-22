<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Projeto Multiplica</title>
</head>

<body>
    <h1>Multiplicando em PHP</h1>
    <?php
        // Referencia as constantes e funções contidas
        // em arquivos PHP externos
        require("../constantes/constantes_php.php");
        include("../funcoes/funcoes.php");
        // Executa uma função de um arquivo externo
        echo multiplica(dois, quatro);
    ?>
</body>

</html>