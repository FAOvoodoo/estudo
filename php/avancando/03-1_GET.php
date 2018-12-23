
<?php
echo "<a href=\"index.php\"> Inicio</a> <a href=\"03-1-1_GETexemplo.php\">exemplo</a><br><br><br>";

// 03-1_GET.php?planeta=Marte&cor=Azul

//echo $_GET['planeta'] . "<br>" . $_GET['cor'];

$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if($planeta != false){
    echo $planeta;
}else{
    echo "planeta nao informado";
}

echo "<br>";

// coalesce
$cor = $_GET['cor'] ?? "Cor nao informada";

echo $cor;