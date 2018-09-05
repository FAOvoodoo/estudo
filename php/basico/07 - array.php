<?php

$array = array(40,200,100,150,"School of net",true); // invocação || chamada de função 

// declaração flexivel
$array = array(
    40,
    200,
    100,
    150,
    "School of net",
    true
);

// echo $array;                                        // Maneiras 
// echo $array(40,200,100,150,"School of net",true);   // Incorretas

echo $array[0];
echo $array[1];
echo $array[2].$array[3].$array[4];
echo $array[5];

echo array(40,200,100,150,"School of net",true)[4];

