<?php 
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $dbName = "tcs";

    $dsn = "mysql:host=" . $hostname . ";dbname=" . $dbName;

    $pdo = new PDO($dsn, $user, $password);
?>