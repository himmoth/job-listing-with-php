<?php
// Start Session
session_start();

// config file 
require_once'config.php';

// Includ helpers 
require_once'helpers/system_helper.php';

// Autoloader 
spl_autoload_register(function ($class_name) {
     require_once 'lib/'.$class_name. '.php';
});

