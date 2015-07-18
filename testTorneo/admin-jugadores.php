<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Insertar Jugador</title>
</head>
<body>

<?php //Ejemplo aprenderaprogramar.com
include ("includes/conexion.php");


?>
<form action="insertar-jugador.php" method="post">

<p align="center">Nombre: <input type="text" name="nombre" size="50"></p>

<SELECT NAME="equipo">
<option>Seleccione un Equipo...</option>
<?php
$select=mysql_query("select e_id,e_nombre from equipo",$conn) or
die("Problemas en el select:".mysql_error());


while($row = mysql_fetch_array($select))
{
echo'<OPTION VALUE="'.$row['e_id'].'">'.$row['e_nombre'].'</OPTION>';
}

?>
</SELECT>

<SELECT NAME="goles">
<option>Seleccione Cantidad de Goles...</option>
<?php
for($i = 1; $i<=30; $i++): ?>    
<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php endfor; ?>

</SELECT>

<SELECT NAME="amarillas">
<option>Seleccione Cantidad de Amarillas...</option>
<?php
for($i = 1; $i<=30; $i++): ?>    
<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php endfor; ?>

</SELECT>

<SELECT NAME="rojas">
<option>Seleccione Cantidad de Rojas...</option>
<?php
for($i = 1; $i<=30; $i++): ?>    
<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php endfor; ?>

</SELECT>

<SELECT NAME="fechas_suspension">
<option>Seleccione Cantidad de Fechas de Suspension...</option>
<?php
for($i = 1; $i<=30; $i++): ?>    
<option value="<?php echo $i ?>"><?php echo $i ?></option>
<?php endfor; ?>

</SELECT>


<p align="center"><input type="submit" value="Guardar Jugador" name="guardar"></p>
</form>


</body>
</html>
