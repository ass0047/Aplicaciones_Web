<?php
// Recibir los datos enviados desde el formulario
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$edad = $_GET['edad'];

// Función para comprobar la edad
function comprobarEdad($nombre, $apellidos, $edad) {
    if ($edad >= 18) {
        echo "Hola $nombre $apellidos, tienes $edad años y eres <strong>mayor de edad</strong>.";
    } else {
        echo "Hola $nombre $apellidos, tienes $edad años y eres <strong>menor de edad</strong>.";
    }
}

// Llamar a la función
comprobarEdad($nombre, $apellidos, $edad);
?>
