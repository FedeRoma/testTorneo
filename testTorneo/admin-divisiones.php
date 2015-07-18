<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Insertar Division</title>
</head>
<body>

<?php //Ejemplo aprenderaprogramar.com
include ("includes/conexion.php");


?>
<form action="insertar-division.php" method="post">

<p align="center">Nombre: <input type="text" name="nombre" size="50">

<SELECT NAME="torneo">
<option>Seleccione un Torneo...</option>
<?php
$select=mysql_query("select t_id,t_nombre from torneo",$conn) or
die("Problemas en el select:".mysql_error());


while($row = mysql_fetch_array($select))
{
echo'<OPTION VALUE="'.$row['t_id'].'">'.$row['t_nombre'].'</OPTION>';
}

?>
</SELECT>

</p>






<p align="center"><input type="submit" value="Guardar Division" name="guardar"></p>
</form>


</body>
</html>
