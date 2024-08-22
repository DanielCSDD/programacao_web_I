<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Controle de Fluxo - if...else</title>
    </head>
    <body>
        <?php
           /* Demonstração de if em PHP
            * De acordo com o valor da variável $saldoBancario
            * o resultado do programa pode variar.
            */
            $saldoBancario = 42389.50;
            
            if ($saldoBancario >= 42390){
                echo "Vou comprar um carro 0km :-D";
            } else { // o else é opcional
                echo "Vou comprar um carro usado :-|";
            }
        ?>
    </body>
</html>