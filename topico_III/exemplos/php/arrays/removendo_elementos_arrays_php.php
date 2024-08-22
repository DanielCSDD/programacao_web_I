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
        
        unset($meuPrimeiroArray[1]);

        print_r($meuPrimeiroArray);
        echo "<br />";
        if (isset($meuPrimeiroArray[1])) {
            echo "Ainda está declarado!<br />";
        } else {
            echo "Foi destruído!<br />";
        }
    ?>
</body>

</html>