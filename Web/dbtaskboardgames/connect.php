<?php
$servername = "db";
$username = "dbtaskboardgames";
$password = "password";
$dbname = "dbtaskboardgames";

try {
    $pdo = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>