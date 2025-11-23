<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "nafer"; // coloque o nome exato do seu banco aqui

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
