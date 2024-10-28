<?php

// Ensure error logging is enabled
ini_set('log_errors', 1);
ini_set('error_log', '../app/logs/error.log');

// Display errors during development
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

require 'functions.php';
require 'config/path.php';
require 'config/session.php';
require 'config/db_con.php';
require 'config/db_func.php';
require 'config/routes.php';
