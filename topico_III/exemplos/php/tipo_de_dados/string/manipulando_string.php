<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tipo de Dados - Manipulação de Strings</title>
    </head>
    <body>
        <h1>Estudando as funções trim()</h1>
        <h2>Removendo espaços em branco em volta da string</h2>
        <?php
            $stringComEspacosEmVolta = " Três espaços em cada lado ";
            echo "{".$stringComEspacosEmVolta."}<br />";
            // Remove os espaços em branco em volta da string
            // $ s t r i n g S e m E s p a c o s E m V o l t a = trim($stringComEspacosEmVolta);
            $stringSemEspacosEmVolta = trim($stringComEspacosEmVolta);
            echo "{".$stringSemEspacosEmVolta."}<br />";
        ?>
        <h2>Removendo espaços em branco à esquerda da string</h2>
        <?php
            $stringComEspacosAesquerda = " Três espaços à esquerda";
            echo "{".$stringComEspacosAesquerda."}<br />";
            // Remove os espaços em branco em volta da string
            $stringSemEspacosAesquerda = trim($stringComEspacosAesquerda);
            echo "{".$stringSemEspacosAesquerda."}<br />";
        ?>
        <h2>Removendo espaços em branco à direita da string</h2>
        <?php
            $stringComEspacosAdireita = "Três espaços à direita";
            echo "{".$stringComEspacosAdireita."}<br />";
            // Remove os espaços em branco em volta da string
            $stringSemEspacosAdireita = trim($stringComEspacosAdireita);
            echo "{".$stringSemEspacosAdireita."}<br />";
        ?>
    </body>
</html>