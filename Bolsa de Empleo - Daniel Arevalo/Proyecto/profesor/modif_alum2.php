<?php
	$ID=$_REQUEST['id'];
	$nom=$_REQUEST['nombre'];
	$dni=$_REQUEST['dni'];
	$exp=$_REQUEST['exp'];
	
		$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
		$query= "UPDATE ALUMNOS SET NOMBRE= '$nom', DNI='$dni', EXP= $exp  WHERE DNI = '$ID'" 
		or die ("Problemas en el select". mysqli_error($conexion));	
		$cons=mysqli_query($conexion,$query);
		$cantidad = mysqli_affected_rows($conexion);
		mysqli_close($conexion);	

		Header("Location: ver_alum.php");
		
?>