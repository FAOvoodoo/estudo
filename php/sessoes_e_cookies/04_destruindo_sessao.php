<?php

session_save_path(__DIR__.'/session');
session_start();

session_destroy();