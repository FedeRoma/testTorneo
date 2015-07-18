<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Insertar Noticia</title>
</head>
<body>

<?php //Ejemplo aprenderaprogramar.com
include ("includes/conexion.php");


?>
<form action="insertar-foto.php" method="post">

<p align="center">Titulo: <input type="text" name="titulo" size="50"></p>

<p align="center">SubTitulo: <input type="text" name="subtitulo" size="50"></p>

<p align="center">Categoria: <br>
<label>  
    <input type="radio" name="categoria" value="equipos"> 
    Equipo</label> 
    <br> 
    <label>  
    <input type="radio" name="categoria" value="mvp"> 
    Mejor Jugador</label> 
    <br> 
</p>   


<p align="center">Link: <input type="text" name="link" size="100"></p>



<p align="center"><input type="submit" value="Guardar Foto" name="guardar"></p>
</form>


</body>
</html>
