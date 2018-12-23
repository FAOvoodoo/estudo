<?php 
echo "<a href=\"index.php\"> Inicio</a><br><br>";

/*  && == E
    || == OU
    !  == NÃO
*/

//// Variaveis
$media = 7; echo "media = $media<br>";
$frequencia = 75; echo "frequencia = $frequencia<br><br>";

$mediaAluno = 6; echo "media do aluno = $mediaAluno<br>";
$frequenciaAluno = 90; echo "frequencia do aluno = $frequenciaAluno<br>";

$chovendo = true; echo "chovendo = ";var_dump($chovendo);echo"<br><hr>";
/// Utilizando operadores

// &&
echo "utilizando && <br>";
if ($mediaAluno >= $media && $frequenciaAluno >= $frequencia){
    echo "Aprovado<hr>";
}else{
    echo "Reprovado<hr>";
}

// ||
echo "utilizando || <br>";
if ($mediaAluno >= $media || $frequenciaAluno >= $frequencia){
    echo "Aprovado<hr>";
}else{
    echo "Reprovado<hr>";
}

// ! 
echo "utilizando ! <br>";
if (!$chovendo){
    echo "Vou pra piscina";
}else{
    echo "Vou ficar em casa<hr>";
}