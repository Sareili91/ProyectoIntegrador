<?php
$server = "localhost";
$username ="root";
$password ="123456";
$database = "php_login_db";

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
} catch (PDOException $e) {
die('Connected failed: '.$e->getMessage());
}
?>