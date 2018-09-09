<?php
echo "<a href=\"index.php\"> Inicio</a><br><br><br>";

for($i = 1; $i <= 10; $i++){
    
    for($i2 = 0; $i2 <= 10; $i2++){
        echo $i . "x" . $i2 . "=" . $i * $i2 . "<br>";
    }

    echo "<hr>";
}

$frutas = [
    'banana',
    'laranja',
    'maçã',
    'melancia',
    'pera'
];

for($i=0 ; $i < count($frutas) ; $i++){
    echo $i + 1 . " - " . $frutas[$i] . "<br>";
}

