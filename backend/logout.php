<?php

//Inicia la sesión actual
session_start();

//Elimina las variables de sesión
session_unset();

//Destruye completamente la sesión
session_destroy();
?>

<!-- formato HTML del logout -->
<!DOCTYPE html>
<!-- Especifica el idioma -->
<html lang="es">
<head>
<meta charset="UTF-8">

<!-- Titulo de dicha página -->
<title>Cerrar Sesión</title>

<!-- Enlace del archivo de estilos -->
<link rel="stylesheet" href="../frontend/css/estilos.css">

</head>
<body>

<!-- Contenedor  -->
<div class="contenedor">

<h2>Sesión cerrada</h2>

<p>Has cerrado sesión correctamente.</p>

<!-- Imagen insertada mediante un enlace -->
<img src="../frontend/img/fin.jpg" class="imagen-bottom">

<br><br>

<!-- Enlace para regresar al login -->
<a href="../frontend/login.html">Volver al Login</a>

</div>

</body>
</html>