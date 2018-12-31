<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $email = $_POST['email'] ?? null;

    $conn = require __DIR__."/connection.php";

    $stmt = $conn->prepare('INSERT INTO users (email) VALUES (?)');
    $stmt->bind_param('s',$email);
    $stmt->execute();
    
    header('location:index.php');
    die(); 
    
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
    <h1>Adicionar usuario</h1>
    <form action="adicionar.php" method="post">
        <input type="text" name="email">
        <input type="submit" value="enviar">
    </form>
    <a href="index.php">voltar</a>
</body>
</html>