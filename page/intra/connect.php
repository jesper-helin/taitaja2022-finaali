<?php
function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "localhost";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=ta22jh932_DB", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?> 
