<?php

session_start();

// Load Configuration file
require_once 'config/config.php';

function autoLoader($_className) {
    require_once 'libraries/' . $_className . '.php';
}

// Autoload SprayItCore Libraries
spl_autoload_register('autoLoader');
