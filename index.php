<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
/* comentario*/
$var ="php";
$x = 5 /*inteiro +15*/ + 5;
echo $x;
echo "<br>";
echo "Meu primeiro script $var !";
echo "<br>";
echo "Eu adoro " . $var ."!";
echo "<br>";
var_dump(5.333);
var_dump("Maria");

crie um arquivo em php e verifique se as variaveis abaixo sao "string"
variaveis: 25.232 5489 meu teste 12.5e896

$y = 10;
function myTeste() {
    echo "<p>Variavel entrada </p>";
   
}
myTeste();
echo "<p>Variavel saida e $y</p>";
 
    $x = 5;
    $x = 20;

    function calc() {
        global $x, $y, $f;
        $f = $x + $y;
    }
    calc();
    echo $f;
    
    function incri(){
        static $h = 0;
        echo $h;
        $h++;
        
    }
    incri();
    echo "<br>";
    incri();
    echo "<br>";
    incri();
    echo "<br>";
    incri();
    echo "<br>";
    incri();
    echo "<br>";

?>

<?php
define("inferior",1);
define("superior",100);

$numero = rand(inferior, superior);
echo "Meu numero da sorte: <br>";
echo $numero."<br>";

?>
    
</body>
</html>