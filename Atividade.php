<?php

$valor = 66;

    if ($valor ==65){
    echo  "Voce deve utilizar os medicamentos com restricoes. Idade: $valor";
}
    elseif ($valor >= 16){
        echo "Voce pode utilizar os medicamentos. Idade: $valor"; 
}

    else {
    echo "Voce nao pode utilizar os medicamentos. Idade: $valor";
}

?>