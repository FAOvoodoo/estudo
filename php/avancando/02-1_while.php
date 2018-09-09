<?php
echo "<a href=\"index.php\"> Inicio</a><br><br><br>";

$contador = 0;

while ($contador <= 10){
    $contador++;
    
    //if ($contador % 2 != 0 ){
    //    continue;               // volta pro inicio do laço
    //}

    echo $contador."<br>";

    //if ($contador == 3) {
    //    break;                  //Interrompe o laço
    //}

}

echo "<hr>";

$numero = 1;

$contador = 1;

while($numero <= 10){

    while ($contador <= 10){
        echo $numero . "x" . $contador. "=" .$numero * $contador. "<br>";
        $contador++;
    }
    echo "<hr>";
    $contador = 1;
    $numero++;

}
