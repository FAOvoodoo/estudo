<?php 
// FILTRAGEM DE DADOS

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $nome = $_POST['nome'] ?? null;

    $nome = trim($nome);//remove espaços inicio/fim
    $nome = stripcslashes($nome);//remove barras invertidas
    $nome = htmlspecialchars($nome);/*
                                     * < => $lt
                                     * > => &gt
                                     * " => &quote
                                     * ' => &#039
                                     * & => &amp
                                    */
    var_dump($nome);
    echo($nome);
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
        <input type="text" name="nome" placeholder="nome">
        <input type="submit" value="enviar">
    </form>

</body>
</html>