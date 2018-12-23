<?php
echo "<a href=\"index.php\"> Inicio</a><br><br><br>";

$planetas = [
 "Mercurio",
 "Venus",
 "Terra",
 "Marte",
 "Jupter",
 "Saturnu",
 "Urano",
 "Netuno" 
];

foreach($planetas as $planeta){
    echo $planeta . "<br>";
}