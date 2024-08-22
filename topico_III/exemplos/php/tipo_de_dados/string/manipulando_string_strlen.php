<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tipo de Dados - Manipulação de Strings Strlen</title>
</head>

<body>
    <h1>Obtendo o tamanho de strings em PHP</h1>
    <?php
        $nomeBonito = "PHP";
        $tamanho = strlen($nomeBonito);
        echo "O nome " . $nomeBonito . " possui " . $tamanho . " letras.";
    ?>
</body>

</html>