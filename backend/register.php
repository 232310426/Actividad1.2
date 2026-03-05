<?php
// Incluir conexión
include("../config/db.php");

// Obtener datos del formulario
$username = $conn->real_escape_string($_POST["username"]);
$password = $_POST["password"];

// Aplicar hash SHA1 (seguridad básica requerida)
$passwordHash = sha1($password);

// Insertar en base de datos
$sql = "INSERT INTO users (username, password)
        VALUES ('$username', '$passwordHash')";

//Ejecuta la consulta SQL
if($conn->query($sql) === TRUE){
    echo "Usuario registrado correctamente";
    //Enlace para regresar al login
    echo "<br><a href='../frontend/login.html'>Ir a Login</a>";
} else {
    echo "Error: " . $conn->error;
}
?>