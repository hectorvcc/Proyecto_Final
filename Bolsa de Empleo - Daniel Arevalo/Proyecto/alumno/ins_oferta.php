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
  
	$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
	$query= "SELECT * FROM INSCRITOS WHERE IDOFERTA = $id AND DNI='$dni' AND CIF = '$cif'"
	or die ("Problemas en el insert". mysqli_error($conexion));
	mysqli_query($conexion,$query);
	$cantidad = mysqli_affected_rows($conexion);
	mysqli_close($conexion);
  
	if($cantidad==0)
	{
	
		$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
		$query= "insert into INSCRITOS (IDOFERTA,DNI,CIF) values ($id,'$dni','$cif')" or die ("Problemas en el insert". mysqli_error($conexion));
		$proceso= "insert into PROCESO (DNI,IDOFERTA,LLAMADA,ENTREVISTA,CONTRATO) values ('$dni',$id,0,0,0)" or die ("Problemas en el insert". mysqli_error($conexion));
		mysqli_query($conexion,$query);
		mysqli_query($conexion,$proceso);
		$cantidad = mysqli_affected_rows($conexion);
		
		if ($cantidad==1){
					Header("Location: ver_ofertas.php");
		}
		mysqli_close($conexion);
	}
	Header("Location: ver_ofertas.php");
?>


</body>
</HTML>