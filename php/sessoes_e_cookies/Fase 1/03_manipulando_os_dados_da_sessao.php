<?php

session_save_path(__DIR__.'/session');
session_start();

$_SESSION['usuario'] = [
    'name' => 'Fabio',
    'idade' => 29,
    'ativo' => true,
    'rate' => 4.3

];
