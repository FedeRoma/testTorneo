<?php 
ob_start(); 
include ("includes/conexion.php"); 
$fecha=date("Y/n/d");

if($_POST['guardar'] && $_POST['nombre'] && $_POST['equipo'] && $_POST['goles'] && $_POST['amarillas'] && $_POST['rojas'] && $_POST['fechas_suspension']){
$act = "INSERT INTO jugador (j_nombre,j_e_id,j_goles,j_amarillas,j_rojas,j_fechas_suspension) 
values 

(
	'".$_POST['nombre']."',
	'".$_POST['equipo']."',
	'".$_POST['goles']."',
	'".$_POST['amarillas']."',
	'".$_POST['rojas']."',
	'".$_POST['fechas_suspension']."'
	

)";

	if(@mysql_query($act)){
		
		$mensaje = "Jugador Publicado";
		echo "<script>";
		echo "if(alert('$mensaje'));";  
		echo "window.location = 'admin.php';";
		echo "</script>"; 
		//header('Location: admin.php');
		//echo "<script>alert('Division Publicada');</script>";
	}

}
?>
 