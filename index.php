<?php

spl_autoload_register(function ($class_name) {
    if (file_exists(__DIR__ . '/classes/' . $class_name . '.php')) {
        require_once(__DIR__ . '/classes/' . $class_name . '.php');
    } else if (file_exists(__DIR__ . '/Controllers/' . $class_name . '.php')) {
        require_once(__DIR__ . '/Controllers/' . $class_name . '.php');
    }
});

require_once('Routes.php'); 
