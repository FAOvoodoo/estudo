<?php 

ini_set('session.save_handler','files');
ini_set('session.save_path',__DIR__.'/session');


session_set_cookie_params(60*60, '/', 'localhost', false, true);

session_start();

?>