<?php 
ob_start(); 
include ("includes/conexion.php"); 
$fecha=date("Y/n/d");

if($_POST['guardar'] && $_POST['titulo'] && $_POST['subtitulo'] && $_POST['categoria'] && $_POST['link']){
$act = "INSERT INTO fotos (titulo,subtitulo,categoria,link,fecha) values ('".$_POST['titulo']."','".$_POST['subtitulo']."','".$_POST['categoria']."','".$_POST['link']."','".$fecha."')";

	if(@mysql_query($act)){
		
		$mensaje = "Foto Publicada";
		echo "<script>";
		echo "if(alert('$mensaje'));";  
		echo "window.location = 'admin.php';";
		echo "</script>"; 
		//header('Location: admin.php');
		//echo "<script>alert('Division Publicada');</script>";
	}

}
?>
 