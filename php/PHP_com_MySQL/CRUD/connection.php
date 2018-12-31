<?php

$conn = new mysqli('localhost' , "devphp" , '123456','php_mysql_iniciando',3306);

if($conn->connect_errno){

    die('falhou em conectar ['.$conn->connect_errno.']:'.$conn->connect_error);
}


//nao deixa executar nada do return pra baixo
return $conn;