<?php
for ($x =0; $x <= 10; $x++ ){
    if($x == 6) continue;
    echo "o numero e: $x <br>";

}

echo "<br>";
echo "<br>";
$cor = array("rosa", "azul", "verde", "cinza");
foreach ($cor as $x) {
    echo "$x <br>";
}

echo "<br>";
echo "<br>";

function menssagem(){
    echo "nada e eterno!!";
}
menssagem();

echo "<br>";
echo "<br>";

function nome($sobrenome, $ano){
    echo "$sobrenome Moises. nascido em $ano <br>";
}
nome("Jose", "1957");
nome("Maria", "1998");
nome("Paulo", "2006");

echo "<br>";
echo "<br>";

function sum($l, $h){
    $z =$l + $h;
    return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4) . "<br>";

echo "<br>";
echo "<br>";

declare (strict_typing=1);
function addnumbers (float $w, float $q) : float{
    return 
    $w + $q;
}
echo addnumbers(1.2, 7.3);

echo "<br>";
echo "<br>";

$carros = array("Lamborguini", 2.4, "Poshe", "Mustangue", "Chevett");
var_dump($carros);

echo "<br>";
echo "<br>";

//$GLOBALS
//$_SERVER
//$_REQUEST
//$_POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

$v=100;
echo $GLOBALS["v"];
echo $v;

echo "<br>";
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>"; echo "<br>";

echo $_SERVER['HTTP_HOST'];
echo "<br>"; echo "<br>";

echo $_SERVER['SERVER_NAME'];
echo "<br>"; echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>"; echo "<br>";

echo $_SERVER['firstname'];

?>