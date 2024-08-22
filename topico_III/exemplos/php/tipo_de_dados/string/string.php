<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tipo de Dados - String</title>
    </head>
    <body>
        <h1>Estudando strings no PHP!</h1>
        <?php
            // Declaramos uma variável string para armazenar
            // o nome de uma linguagem de programação.
            $linguagemDeProgramacao = "PHP";
        ?>
        <h2>echo com aspas simples:</h2>
        <?php
            echo '<p>Estudar $linguagemDeProgramacao é muito Legal !! :-)</p>';
        ?>
        <h2>echo com aspas duplas:</h2>
        <?php
            echo "<p>Estudar $linguagemDeProgramacao é muito Legal !! :-)</p>";
        ?>
    </body>
</html>