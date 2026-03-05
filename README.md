# Mini aplicación Web (Actividad de Evaluación)

# Descripción

Este proyecto es una aplicación web hecha con PHP, HTML y MySQL que tiene como objetivo crear un sistema básico de autenticación de usuarios. El sistema permite que un usuario se registre, luego pueda iniciar sesión y entrar a un panel principal del sistema. También se aplican algunos conceptos de seguridad vistos en clase y se intenta que el código tenga comentarios para explicar lo que hace cada parte. El proyecto se realizó para aplicar temas relacionados con autenticación, autorización y seguridad básica en aplicaciones web.

# Funcionalidades

La aplicación permite registrar usuarios mediante un formulario donde se ingresan datos básicos como nombre de usuario y contraseña. Después el usuario puede iniciar sesión con esos datos registrados previamente. Cuando el usuario inicia sesión correctamente puede acceder a una página principal llamada dashboard. Si el usuario no ha iniciado sesión no puede entrar directamente a esa página. También existe una opción para cerrar sesión y salir del sistema.

# Tecnologías utilizadas

Para el desarrollo del sistema se utilizó PHP como lenguaje principal del lado del servidor. También se usó HTML para la estructura de las páginas y CSS para algunos estilos de la interfaz. La base de datos utilizada es MySQL para guardar la información de los usuarios. Para ejecutar el proyecto se utilizó XAMPP como entorno de desarrollo local que incluye el servidor Apache y el servicio de base de datos.

# Seguridad implementada

En el sistema se implementan algunas medidas de seguridad básicas. Las contraseñas de los usuarios no se guardan en texto normal en la base de datos, sino que se utiliza la función password_hash() de PHP para generar un hash de la contraseña. Cuando el usuario intenta iniciar sesión se utiliza la función password_verify() para comprobar si la contraseña ingresada coincide con la almacenada. También se usan sesiones de PHP con session_start() para controlar el acceso a las páginas del sistema. De esta forma solo los usuarios que han iniciado sesión pueden acceder al dashboard. Además se realiza una validación simple en los formularios para verificar que los campos no estén vacíos antes de enviar la información. En algunas partes se utiliza la función htmlspecialchars() para evitar que se ejecute código HTML o scripts enviados por el usuario.

# Estructura del proyecto

El proyecto se organiza en varias carpetas para separar las partes del sistema. Una carpeta contiene los archivos del backend donde se encuentra la lógica en PHP para el registro, inicio de sesión y cierre de sesión. Otra carpeta contiene los archivos del frontend donde están las páginas que ve el usuario como el login, el registro y el dashboard. También hay una carpeta donde se incluye el archivo de la base de datos que contiene la estructura de la tabla de usuarios.

proyecto/
backend/
login.php
register.php
logout.php
add_contact.php
add_appointment.php

config/
db.php

frontend/
login.html
register.html
dashboard.php
css/ 
estilos.css
img/
inicio.jpg
fin.jpg

database/
auth_db.sql

# Base de datos

El sistema utiliza una base de datos que contiene una tabla llamada users donde se guardan los usuarios registrados. En esta tabla se guarda un identificador para cada usuario, el nombre de usuario y la contraseña en formato hash.

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL
);

# Ejecución del proyecto

Para poder ejecutar el proyecto primero se debe instalar XAMPP en la computadora. Después se deben iniciar los servicios de Apache y MySQL desde el panel de control. Luego se debe crear la base de datos e importar el archivo SQL usando phpMyAdmin. Después se copia la carpeta del proyecto dentro de la carpeta htdocs de XAMPP. Finalmente se puede abrir el navegador y acceder al sistema usando la dirección http://localhost/ProyectoWeb.

Trabajo hecho por la Alumna Claudia Monserrat Ramirez Díaz de Ingenieria en Informática.

