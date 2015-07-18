<?php 
ob_start(); 
include ("includes/conexion.php"); 
$fecha=date("Y/n/d");

if($_POST['guardar'] && $_POST['nombre'] && $_POST['torneo']){
$act = "INSERT INTO division (div_nombre,div_t_id) 
values 

	(
		'".$_POST['nombre']."',

		'".$_POST['torneo']."'

	)";

	if(@mysql_query($act)){
		
		$mensaje = "Division Publicada";
		echo "<script>";
		echo "if(alert('$mensaje'));";  
		echo "window.location = 'admin.php';";
		echo "</script>"; 
		//header('Location: admin.php');
		//echo "<script>alert('Division Publicada');</script>";
	}
}



?>
 
 
 