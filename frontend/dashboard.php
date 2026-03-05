<?php
session_start();

// Protección de sesión
if(!isset($_SESSION["user_id"])){
    header("Location: login.html");
    exit();
}
?>

<!-- Estilos específicos para el dashboard -->

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>

body{
    margin:0;
    font-family:Arial, Helvetica, sans-serif;
    background:linear-gradient(120deg,#ffffff,#91edff);
}

/* Barra superior */

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#91edff;
    padding:20px;
    color:black;
}

.topbar a{
    color:#9be7ff;
    text-decoration:none;
    font-weight:bold;
}

/* Contenedor principal */

.container{
    display:flex;
    justify-content:center;
    gap:80px;
    margin-top:80px;
}

/* Paneles */

.card{
    background:#ffffff;
    padding:35px;
    border-radius:10px;
    width:320px;
    box-shadow:0 5px 15px rgba(0, 0, 0, 0.27);
    color:black;
}

.card h3{
    text-align:center;
    margin-bottom:20px;
}

/* Inputs */

input{
    width:100%;
    background: rgb(177,242,255);
    padding:10px;
    margin:10px 0;
    border:none;
    border-radius:6px;
}

/* Botones */

button{
    width:100%;
    padding:12px;
    margin-top:10px;
    border:none;
    border-radius:6px;
    background:#91edff;
    color:black;
    font-size:15px;
    cursor:pointer;
}

button:hover{
    background:#3d7e85;
}

/* Botón cerrar sesión */

.logout{
    display:flex;
    justify-content:center;
    margin-top:60px;
}

.logout a{
    background:#9be7ff;
    color:black;
    padding:12px 25px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
}

.logout a:hover{
    background:#22383a;
}

label{
    font-size:14px;
}

</style>

</head>

<body>

<!-- se inicia creando el contenedor principal del Panel
 incluyendo en este el enlace del archivo logout -->

<div class="topbar">

<h2>Bienvenido al Sistema</h2>

<a href="../backend/logout.php">Cerrar sesión</a>

</div>

<!-- El container 2, esta destinado al registro de contactos, 
 incluyendo el enlace del añññadir contacto y su dicho formulario -->

<div class="container">

<div class="card">

<h3>Registrar Contacto</h3>

<form action="../backend/add_contact.php" method="POST">

<label>Nombre:</label>
<input type="text" name="name" required>

<label>Teléfono:</label>
<input type="text" name="phone" required>

<button type="submit">Guardar Contacto</button>

</form>

</div>

<!-- Al igual que el anterior se aplica lo mismo cambiando el dato 
 de la fecha por date el cual cambiara dicho formato -->

<div class="card">

<h3>Registrar Cita</h3>

<form action="../backend/add_appointment.php" method="POST">

<label>Título:</label>
<input type="text" name="title" required>

<label>Fecha:</label>
<input type="date" name="date" required>

<button type="submit">Guardar Cita</button>

</form>

</div>

</div>

<!-- Se creó un boton extra por estetica de la visualización 
 de la opción cerrar sesión o logout -->

<div class="logout">
<a href="../backend/logout.php">Cerrar sesión</a>
</div>

</body>
</html>