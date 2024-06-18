<?php 

$dbserver = 'localhost';
$dbname = 'evaluation_form';
$dbusername = 'root';
$dbpassword = '';

try {

    $conn = new PDO("mysql:host=$dbserver; dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}