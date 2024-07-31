<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'database1';

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} 
?>