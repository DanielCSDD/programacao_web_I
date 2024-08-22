<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tipo de Dados - Manipulação de Strings Str Replace</title>
</head>

<body>
    <h1>Substituição de strings em PHP</h1>
    <?php
        $variavelTextoOriginal = "A disciplina Algoritmos é demais!";
        $variavelTextoAlterado = str_replace("Algoritmos", "Programação Web I", $variavelTextoOriginal);
        echo $variavelTextoAlterado;
    ?>
</body>

</html>