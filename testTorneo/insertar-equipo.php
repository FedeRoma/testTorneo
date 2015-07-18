<?php 
ob_start(); 
include ("includes/conexion.php"); 
$fecha=date("Y/n/d");

if($_POST['guardar'] && $_POST['nombre'] && $_POST['division'] && $_POST['torneo']){
$act = "INSERT INTO equipo (e_nombre,e_div_id,e_t_id) 
values 

(
	'".$_POST['nombre']."',
	'".$_POST['division']."',
	'".$_POST['torneo']."'

)";

	if(@mysql_query($act)){
		
		$mensaje = "Equipo Publicado";
		echo "<script>";
		echo "if(alert('$mensaje'));";  
		echo "window.location = 'admin.php';";
		echo "</script>"; 
		//header('Location: admin.php');
		//echo "<script>alert('Division Publicada');</script>";
	}

}
?>
 