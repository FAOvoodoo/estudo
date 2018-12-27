<?php

session_save_path(__DIR__.'/session');
session_start();

var_dump($_SESSION['usuario']);

?>