
<html>
<head></head>
<body>

<?php
    $planetas = [
        "Mercurio",
        "Venus",
        "Terra",
        "Marte",
        "Jupter",
        "Saturnu",
        "Urano",
        "Netuno" 
       ];
?>
<ul>
    <?php foreach($planetas as $planeta):?>
    <li>
       <a href="03-1_GET.php?planeta=<?php echo $planeta;?>"><?php echo $planeta;?></a>
    </li>
    <?php endforeach;?>
</ul>

     
</body>
</html>