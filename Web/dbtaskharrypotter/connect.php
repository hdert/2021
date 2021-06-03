<?php
$servername = "db";
$username = "dbtaskharrypotter";
$password = "password";
$dbname = "dbtaskharrypotter";

try {
    $pdo = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>