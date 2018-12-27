<?php

$id = $_GET['id'] ?? 0;

$conn = new mysqli('127.0.0.1' , "devphp" , '123456','php_mysql_iniciando');


// $result = $conn->query('INSERT INTO users (email) VALUES ("'.$email.'")');

$stmt = $conn->prepare('SELECT * FROM  users WHERE id > ?');

$stmt->bind_param('i',$id);

$stmt->execute();

$result = $stmt->get_result();


$users = $result->fetch_all(MYSQLI_ASSOC);

foreach ($users as $user) {
    echo $user['id'].' - '.$user['email'].'</br>';
}
