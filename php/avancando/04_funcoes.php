<?php
echo "<a href=\"index.php\"> Inicio</a><br><br><br>";

function escrevaNome($nome){
    echo "Olá $nome ! <br>";
}

escrevaNome("Fabio");
escrevaNome("Pedro");
echo"<hr>";

// RETORNO


function soma($a=0, $b=0){
    return $a + $b;
}

$resultado = soma(2);

echo $resultado;