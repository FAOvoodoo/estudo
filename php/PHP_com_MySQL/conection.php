<?php

$conn = new mysqli('127.0.0.1' , "devphp" , '123456','php_mysql_iniciando');

if($conn->connect_errno){

    die('falhou em conectar ['.$conn->connect_errno.']:'.$conn->connect_error);
}

echo '<br>';

$sql = 'CREATE TABLE products(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
    
    )';

if(!$conn->query($sql)) {
     echo('tabela users ja existe');
}

//$result = $conn->query('INSERT INTO users (email) VALUE ("fabio@fabio.com")');


echo '<br>';
$result = $conn->query('SELECT * FROM users');

var_dump($result->fetch_assoc());

echo '<ul>';
while ($user = $result->fetch_assoc()){
    echo'<li>'.$user['id'].'-'.$user['email'].'</li>';
}
echo '<ul>';

var_dump($result->fetch_assoc());