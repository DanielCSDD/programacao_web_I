<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Constantes</title>
    </head>
    <body>
        <?php
            // Declara uma constante Case Sensitive
            define("constanteCaseSensitive", "CASE_SENSITIVE");
            echo constanteCaseSensitive;
            echo "<br>";
            // Declara uma constante não Case Sensitive
            define("constanteNaoCaseSensitive", "NAO_CASE_SENSITIVE", false);
            echo constanteNaoCaseSensitive;
        ?>
    </body>
</html>