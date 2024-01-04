<?php

function getConnection() {
    $host = 'localhost';
    $dbname = 'db_mvc';
    $username = 'root';
    $password = 'Larissa_3001';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
        return null;
    }
}
?>
