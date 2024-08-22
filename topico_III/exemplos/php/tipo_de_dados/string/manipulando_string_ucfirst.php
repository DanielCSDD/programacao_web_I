<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tipo de Dados - Manipulação de Strings Ucfirst</title>
</head>

<body>
    <h1>Manipulando o CASE de strings em PHP</h1>
    <?php
        $variavelCaseMisturado = "com a UNIASSELVI, posso ver o meu futuro!";
    ?>
    <h2>Invertendo para minúscula:</h2>
    <?php
        echo strtolower($variavelCaseMisturado);
    ?>
    <h2>Invertendo para maiúscula:</h2>
    <?php
        echo strtoupper($variavelCaseMisturado);
    ?>
    <h2>Invertendo a primeira letra para maiúscula:</h2>
    <?php
        echo ucfirst($variavelCaseMisturado);
    ?>
</body>

</html>