<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade_if_else_media_de_aluno</title>
</head>
<body>

<?php
    
    $nota1 = 0; 
    $nota2 = 0;
    $nota3 = 0;
    $nota4 = 0;
    $resultado = ($nota1+$nota2+$nota3+$nota4)/4;

 $mensagem = '';
    echo "Nota 1: " . $nota1 . " Nota 2: " . $nota2 . " Nota 3: " . $nota3 . " Nota 4: " . $nota4 . "<br>";
 if (($resultado >= 7) && ($resultado != 10) ) {
 $mensagem = 'O aluno foi aprovado.';
 echo "<br>";
 echo "A média foi : $resultado. $mensagem ";
 }
 elseif ($resultado == 0) {
 $mensagem = 'Estude mais, você não acertou nada.'; 
 echo "<br><br>";
 echo "A média foi $resultado. $mensagem ";
 }
 elseif ($resultado == 10) {
 $mensagem = 'Parabéns! Aprovado com nota máxima';
 echo "<br><br>";
 echo "A média foi $resultado. $mensagem ";
 }
 else {
 $mensagem = 'O aluno foi reprovado.';
 echo "<br><br>";
 echo "A média foi $resultado. $mensagem"; 
 }



 echo "<br>";
 $text = "Olá ";
 $text2 = "Mundo!";
 $text .= $text2;
 echo $text ;
 echo "<br>";
 echo "<br>";

 $color = "gray";
 switch ($color){
    case "red":
        echo "My favorite color is red";
    break;
    case "blue":
        echo "My favorite color is blue";
    break;
    case "pink":
        echo "My favorite color is pink";
    break;
    case "green":
        echo "My favorite color is green";
    break;
    default:
    echo "none favorite color"; echo "<br>";
    }
   
    echo "<br>";
    $dia=4;
    switch($dia){
        case 6:
            echo "Hoje é Sabado";
        break;
        case 2:
            echo "Hoje é Domingo";
        break;
        default:
            echo "Logo vem o fim de semana";
    }

?>

</body>
</html>