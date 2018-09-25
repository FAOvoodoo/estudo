<?php 
// OPERADOR TERNARIO VS NULL COALESCING OPERATOR
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //$idade = (isset($_POST['idade'])) ? $_POST['idade'] : null;
    

    //null coalescing operator
    $idade = $_POST['idade'] ?? null;


    if (is_null($idade) || $idade === ''){
        die('Voce nao informou a idade');

    }
    $idade = (int)$idade;

    if ($idade < 18){
        die('Voce é muito novo');
    }
    

    $idade_string = (string)$idade;
    
    var_dump($idade_string, $idade);

    echo 'ok sua idade é ' . $idade;
        exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="idade" placeholder="idade">
        <input type="submit" value="enviar">
    </form>

</body>
</html>