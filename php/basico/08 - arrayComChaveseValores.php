<?php

// chaves 0 1 2 3 4 5 (valores/posiçoes unicos)
$array = array(
    40,
    200,
    100,
    150,
    "School of net",
    true
);

//forma explicita
$array1 = array(
    0 => 40,
    1 => 200,
    2 => 100,
    3 => 150,
    4 => "School of net",
    5 => true
);

$array2 = array(
    "luiz" => 40,
    1 => 200,
    100,
    3000 => 150,
    "School of net",
    true
);

echo $array2["luiz"]."<br>";
echo $array2[1]."<br>";
echo $array2[3000]."<br>";
echo $array2[2]."<br>";
var_dump($array2);
