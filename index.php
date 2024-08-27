<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Isso e um comentario-->

<?php
    
    /*comentario */

    echo "Meu primeiro script em PHP!";
    echo "<br>"; echo "<br>";
    var_dump(3.14);
    echo "<br>"; echo "<br>";
    var_dump("Maria");
    echo "<br>"; echo "<br>";

?>

<?php

define("INFERIOR",1);
define("SUPERIOR",100);

$numero = rand(INFERIOR, SUPERIOR);
echo "Meu numero da sorte e: "; 
echo $numero."<br>"; echo "<br>";

?>

<?php
    
    $valor = 18;

    if($valor ==18){
        echo "o valor e 18";
    }
    elseif ($valor >= 10){
        echo "O valor e maior ou igual a 10";
    }
    else {
        echo "O valor e menor que 10";
    }
    
    echo "<br>";

?>

<?php

echo "<br>";
echo "O valor minimo e: ";
echo(min(0,130,20,-3,-200)."<br>"); echo "<br>";
echo "O valor maximo e: ";
echo(max(0,130,20,-3,-200)."<br>");

?>

    
</body>
</html>