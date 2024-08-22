<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Declarando funções</title>
</head>

<body>
    <h1>Declarando funções</h1>
    <?php
        // Declara uma função para somar
        // dois valores
        function soma($valor1, $valor2)
        {
            $resultado = $valor1 + $valor2;
            return $resultado;
        }
    ?>
        <h2>Agora vamos usar a função soma com os valores 3 e 6!</h2>
    <?php
        $tres = 3;
        $seis = 6;
        echo soma($tres, $seis);
    ?>
</body>

</html>