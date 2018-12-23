<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "O formulario foi enviado pelo ".$_POST['nome'];
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
        <input type="text" name="nome">
        <input type="submit" value="enviar">
    </form>

<a href="index.php?name=fabio">nome</a>

<?php 
if (isset($_GET['name']) != false ){
}
    
?>

</body>
</html>