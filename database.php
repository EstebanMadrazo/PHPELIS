<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'phpelis_database';
    
    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
    } catch (PDOException $ex) {
        die('Conexión fallida: '.$e->getMessage());
    }

