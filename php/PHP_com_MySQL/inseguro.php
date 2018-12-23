<?php

$email = $_GET['email'] ?? null;
$id = $_GET['id'] ?? 0;


$conn = new mysqli('127.0.0.1' , "devphp" , '123456','php_mysql_iniciando');

// $result = $conn->query('INSERT INTO users (email) VALUES ("'.$email.'")');

$result = $conn->query('SELECT * FROM  users WHERE id >'.$id);

$users = $result->fetch_all(MYSQLI_ASSOC);

foreach ($users as $user) {
    echo $user['id'].' - '.$user['email'].'</br>';
}


