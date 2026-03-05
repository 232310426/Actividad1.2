<?php

//Inicia la sesión
session_start();

//Se incluye el archivo de comexión a la base de datos
include("../config/db.php");

//Se obtiene el usuario enviado desde el formulario
$username = $conn->real_escape_string($_POST["username"]);
//obtiene la contraseña y la convierte en hash
$password = sha1($_POST["password"]);

//Consulta SQL que busca un usuario con dicho nombre y contraseña
$sql = "SELECT * FROM users 
        WHERE username='$username' 
        AND password='$password'";

//ejecuta la consulta
$result = $conn->query($sql);

//Verifica que se haya encontrado algun registro
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    
    //guarda el ID del usuario encontrado
    $_SESSION["user_id"] = $row["id"];
    header("Location: ../frontend/dashboard.php");
} else {
    echo "Credenciales incorrectas";
}
?>