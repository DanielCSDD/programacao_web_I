<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arrays - PHP</title>
</head>

<body>
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
        // Declaraçao de um array vazio
        $arrayVazio = array();
        // Note que a variável do array está definida
        if (isset($arrayVazio)) {
            echo "O array vazio está declarado !<br />";
        }
        // Porém nenhum índice possui valor
        // por exemplo, tentaremos acessar o índice zero
        if (isset($arrayVazio[0])) {
            // Não vai passar aqui!
            echo "A primeira posição do array vazio está declarada.<br />";
        }
    ?>
</body>

</html>