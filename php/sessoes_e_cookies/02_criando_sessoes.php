<?php
error_reporting(E_ALL); 
ini_set('display_errors', 'On');
ob_start();

session_save_path(__DIR__.'/session');

session_start();

$_SESSION['meunome'] = 'Fabio';

var_dump(session_save_path());
?>