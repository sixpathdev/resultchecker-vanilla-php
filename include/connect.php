<?php

$host = "localhost";
$user = "root";
$password = "1smartcoded";
$database = "resultchecker";

//pdo instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}
catch(PDOException $e) {
    echo "Connection Error:" . $e->getMessage();
}

?>