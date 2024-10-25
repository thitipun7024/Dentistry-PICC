<?php
$host = 'mysql';
$db = 'Learning_DB'; 
$user = 'thitipun'; 
$pass = '15945652Th';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");
$conn->query("SET time_zone = '+07:00'");

//echo "Connected successfully!";
?>
