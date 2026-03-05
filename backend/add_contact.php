<?php

// Inicia la sesión
session_start();

// Incluye la conexión a la base de datos
include("../config/db.php");

// Obtiene el nombre del contacto enviado desde el formulario
$name = $conn->real_escape_string($_POST["name"]);

// Obtiene el teléfono del contacto
$phone = $conn->real_escape_string($_POST["phone"]);

// Obtiene el ID del usuario que inició sesión
$user_id = $_SESSION["user_id"];

// Consulta SQL para insertar el contacto
$sql = "INSERT INTO contacts (name, phone, user_id)
        VALUES ('$name', '$phone', '$user_id')";

// Ejecuta la consulta
if($conn->query($sql) === TRUE){

    // Mensaje si se guardó correctamente
    echo "Contacto guardado";

    // Enlace para volver al panel
    echo "<br><a href='../frontend/dashboard.php'>Volver</a>";

} else {

    // Mensaje si ocurrió error
    echo "Error";

}
?>