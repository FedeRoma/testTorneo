<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Insertar Torneo</title>
</head>
<body>

<?php //Ejemplo aprenderaprogramar.com
include ("includes/conexion.php");
/*
if($_GET['torneo']==null){
$_GET['torneo']="";
}
*/
?>
<form action="insertar-torneo.php" method="post">

<input type="hidden" name="tipo" value="alta" size="50">
<p align="center">Nombre: <input type="text" name="nombre" size="50"></p>



<p align="center"><input type="submit" value="Guardar Torneo" name="guardar"></p>
</form>

<h1> Modificar Torneo <h1>


<SELECT NAME="torneo" onchange=location.href='admin.php';>
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

<?php

if(isset($_GET['torneo'])){
	echo $_GET['torneo'];
	$query = 'SELECT * FROM torneo WHERE t_id = '.$_GET['torneo'];
	$row = mysql_fetch_array($query);
?>	
	<form action="insertar-torneo.php" method="post">

	<input type="hidden" name="tipo" value="modificacion" size="50">
	<p align="center">Nombre: <input type="text" name="nombre" value="<?php $row['t_nombre'] ?>" size="50"></p>

	<p align="center"><input type="submit" value="Modificar Torneo" name="guardar"></p>
	</form>



<?php	
}//Fin Isset Torneo
?>





</body>
</html>
