<?php
	$ID=$_REQUEST['id'];
	$nom=$_REQUEST['nombre'];
	$usu=$_REQUEST['usu'];
	$pass=$_REQUEST['pass'];
	
		$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
		$query= "UPDATE PROFESORES SET NOMBRE= '$nom', USU='$usu', PASS= '$pass'  WHERE IDPROF = $ID" 
		or die ("Problemas en el select". mysqli_error($conexion));	
		$cons=mysqli_query($conexion,$query);
		$cantidad = mysqli_affected_rows($conexion);
		mysqli_close($conexion);	
						
		Header("Location: ver_prof.php");
?>