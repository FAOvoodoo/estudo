<?php
$nome = "Fabio";
$html = "<h1> Iniciando com HTML </h1>"
?>

<html>
<head></head>
<body>
        
    <?php echo $html; ?>
    <h1><?php echo $nome; ?></h1>

    <?php 
        echo 5 + 3 ."<br>"; 
        echo $nome;
    ?>
</body>
</html>