<?php 
echo "<a href=\"index.php\"> Inicio</a><br>";

$a = 10;
$b = 10;

echo "A=$a e B=$b <br><br><br>";

$c = $a == $b;

//////////////////////////////
echo "utilizando == <br>";
if($a == $b){
    echo "A é igual a B";
}else{
    echo "A é diferentede  B";
}echo "<hr>";

//////////////////////////////
echo "utilizando != <br>";
if($a != $b){
    echo "A é diferente de B";
}else{
    echo "A é igual a  B";
}echo "<hr>";

//////////////////////////////
echo "utilizando >=  <br>";
if($a >= $b){
    echo "A é maior ou igual a B";
}else{
    echo "A é Menor B";
}echo "<hr>";

//////////////////////////////
echo "utilizando <=  <br>";
if($a <= $b){
    echo "A é Menor ou igual a B";
}else{
    echo "A é Maior B";
}echo "<hr>";