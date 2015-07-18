<?php 
ob_start(); 
include ("includes/conexion.php"); 
$fecha=date("Y/n/d");


if($_POST['tipo']=="alta"){
	if($_POST['guardar'] && $_POST['nombre']){
	$act = "INSERT INTO torneo (t_nombre) 
	values 

	(
		'".$_POST['nombre']."'



	)";

		if(@mysql_query($act)){
			
			$mensaje = "Torneo Publicado";
			echo "<script>";
			echo "if(alert('$mensaje'));";  
			echo "window.location = 'admin.php';";
			echo "</script>"; 
			//header('Location: admin.php');
			//echo "<script>alert('Division Publicada');</script>";
		}

	}
}

if($_POST['tipo']=="modificacion"){
	if($_POST['guardar'] && $_POST['nombre']){
	$act = "UPDATE torneo SET t_nombre = $_POST['nombre'];";

		if(@mysql_query($act)){
			
			$mensaje = "Torneo Modificado";
			echo "<script>";
			echo "if(alert('$mensaje'));";  
			echo "window.location = 'admin.php';";
			echo "</script>"; 
			//header('Location: admin.php');
			//echo "<script>alert('Division Publicada');</script>";
		}

	}
}



	
?>
 