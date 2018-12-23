<?php
// HTTP - GET e POST

var_dump($_GET); /****************************************************************************************
                array com todas as informações passadas 
                array(0) { }
                
                10-1-recebe_info.php?chave=valor 
                array(1) { ["chave"]=> string(5) "valor" } 
                
                10-1-recebe_info.php?nome=Fabio&sobrenome=Oliveira
                array(2) { ["nome"]=> string(5) "Fabio" ["sobrenome"]=> string(8) "Oliveira" }
                ****************************************************************************************/
var_dump($_POST);
?>
<h1><?php //echo$_GET['nome'];?></h1>
<h1><?php echo$_POST['nome'];?></h1>