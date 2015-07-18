<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrador General</title>
</head>
<body>

<?php 
echo "<h2 align='center'>Administrador de Torneos</h2>";

include ("admin-torneos.php");

echo "<h2 align='center'>Administrador de Divisiones</h2>";

include ("admin-divisiones.php");

echo "<h2 align='center'>Administrador de Equipos</h2>";

include ("admin-equipos.php");

echo "<h2 align='center'>Administrador de Jugadores</h2>";

include ("admin-jugadores.php");

echo "<h2 align='center'>Administrador de Fotos</h2>";

include ("admin-fotos.php");
?>


</body>
</html>
