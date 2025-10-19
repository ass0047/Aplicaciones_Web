<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$ciudad = $_POST['ciudad'];
$preferencias = isset($_POST['preferencias']) ? implode(", ", $_POST['preferencias']) : "Ninguna";

echo "<h1>Datos recibidos</h1>";
echo "<p><b>Nombre:</b> $nombre</p>";
echo "<p><b>Apellidos:</b> $apellidos</p>";
echo "<p><b>Ciudad:</b> $ciudad</p>";
echo "<p><b>Preferencias:</b> $preferencias</p>";
?>