<?php 
$servidor = "localhost";
$nombreUsuario = "root";
$contrasena = "";
$BD = "baseTorneoInterno";

$conn = mysql_connect($servidor , $nombreUsuario , $contrasena);
mysql_select_db($BD, $conn); 
if($conn == true) {

//echo 'Se conecto correctamente a la base de datos <br/>';

} else {
	
die('<strong>No se conecto: </strong>' . mysql_error());

}
?> 