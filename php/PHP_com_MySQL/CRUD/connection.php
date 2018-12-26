<?php

$conn = new mysqli('127.0.0.1' , "devphp" , '123456','php_mysql_iniciando');

if($conn->connect_errno){

    die('falhou em conectar ['.$conn->connect_errno.']:'.$conn->connect_error);
}


//nao deixa executar nada do return pra baixo
return $conn;