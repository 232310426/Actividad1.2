<?php

// Inicia la sesión para acceder al usuario
session_start();

// Incluye la conexión a la base de datos
include("../config/db.php");

// Obtiene el título de la cita
$title = $conn->real_escape_string($_POST["title"]);

// Obtiene la fecha de la cita
$date = $_POST["date"];

// Obtiene el ID del usuario que creó la cita
$user_id = $_SESSION["user_id"];

// Consulta SQL para insertar la cita en la base de datos
$sql = "INSERT INTO appointments (title, date, user_id)
        VALUES ('$title', '$date', '$user_id')";

// Ejecuta la consulta
if($conn->query($sql) === TRUE){

    // Mensaje si se guardó correctamente
    echo "Cita guardada";

    // Enlace para regresar al panel principal
    echo "<br><a href='../frontend/dashboard.php'>Volver</a>";

} else {

    // Mensaje si ocurre error
    echo "Error";

}
?>