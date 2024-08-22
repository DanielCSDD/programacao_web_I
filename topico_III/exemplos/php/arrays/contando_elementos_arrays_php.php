<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arrays - PHP</title>
</head>

<body>
    <h1>Contando os elementos de um array</h1>
    <?php
        // Declaração de um array
        // Note que podemos inserir tanto tipos
        // numéricos quanto strings
        // Em seguida obtemos o valor de cada posição do array
        // Utilizando o nome da variável seguido do índice da posição
        // entre colchetes
        // Note que o indice inicia em zero
        $meuPrimeiroArray = array(1, 2, 3, "Quatro", 5);
        echo $meuPrimeiroArray[0] . "<br />";
        echo $meuPrimeiroArray[1] . "<br />";
        echo $meuPrimeiroArray[2] . "<br />";
        echo $meuPrimeiroArray[3] . "<br />";
        echo $meuPrimeiroArray[4] . "<br />";

        echo count($meuPrimeiroArray);
        echo "<br />";
        echo sizeof($meuPrimeiroArray);
        echo "<br />";
    ?>
</body>

</html>