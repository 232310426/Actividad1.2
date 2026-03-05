<?php
// Archivo de conexión a la base de datos

$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "agenda_web";
$port = 3308;

// Crear conexión
$conn = new mysqli($host, $username, $password, $db, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>