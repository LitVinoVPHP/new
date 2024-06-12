<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'MySQL-8.0');
    define('DATABASE', 'test');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>