<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Comando - Print</title>
    </head>
    <body>
        <h1>Vamos estudar o método print</h1>
        <?php
            // Declaramos uma variável string para armazenar
            // o nome de uma instituição de ensino.
            $instituicaoDeEnsino = "UNIASSELVI";
        ?>
        <h2>print com aspas simples:</h2>
        <?php
            print '<p>Estudar na $instituicaoDeEnsino é muito Legal !! :-)</p>';
        ?>
        <h2>print com aspas duplas:</h2>
        <?php
            print "<p>Estudar na $instituicaoDeEnsino é muito Legal !! :-)</p>";
        ?>
    </body>
</html>