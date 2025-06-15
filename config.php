<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consultxpert";

// Crează conexiunea
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifică conexiunea
if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}
?>

