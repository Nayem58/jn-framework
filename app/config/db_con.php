<?php

function dbConnect()
{
    // Set the database connection parameters based on the environment
    if ($_SERVER['SERVER_NAME'] === 'localhost') {
        // Local environment configuration
        $host = 'localhost';
        $db = 'csm_bangladesh';
        $user = 'root';
        $pass = 'root';
    } else {
        // Production environment configuration
        $host = 'localhost';
        $db = 'markvsiw_csm_bangladesh';
        $user = 'markvsiw_dev';
        $pass = 'dev@marketalyzer.com';
    }

    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {

        // Log error to a file
        error_log('Database connection failed: '.$e->getMessage(), 3, '../app/logs/error.log');

        exit('Connection Failed: '.$e->getMessage());
    }

    return $pdo;
}
