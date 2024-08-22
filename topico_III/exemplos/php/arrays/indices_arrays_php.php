<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arrays - PHP</title>
</head>

<body>
    <h1>Declarando o índice de um array</h1>
    <?php
        $array = array("U", "N", "I", "A", "S", "S", "E");
        $array["meio"] = "LV";
        $array["ultimaLetra"] = "I";
        print_r($array);
    ?>
</body>

</html>