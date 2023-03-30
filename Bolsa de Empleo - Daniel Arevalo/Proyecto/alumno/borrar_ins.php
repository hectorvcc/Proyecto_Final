<html>
<head>
	<meta content="text/html; charset=UTF-8;" http-equiv="content-type">
	<title>
		ALUMNO - Inscripción a oferta 
	</title>
</head>


<?php
  
  $id=$_REQUEST['id'];
  $dni=$_REQUEST['dni'];
  $cif=$_REQUEST['cif'];
  
  $conexion=mysqli_connect("localhost","root","","bolsaempleo") 
	or die("Problemas en la conexion");

	$query= "delete from INSCRITOS WHERE IDOFERTA = $id AND DNI='$dni' AND CIF = '$cif'"
	or die ("Problemas en el insert". mysqli_error($conexion));
	
	mysqli_query($conexion,$query);
	
	$cantidad = mysqli_affected_rows($conexion);
			
				if ($cantidad==1){
					
					Header("Location: ver_ofertas.php");
				}
				
	mysqli_close($conexion);
?>


</body>
</HTML>