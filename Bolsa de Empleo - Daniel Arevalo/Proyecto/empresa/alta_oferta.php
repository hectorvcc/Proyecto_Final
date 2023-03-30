<html>
<head>
	<meta content="text/html; charset=UTF-8;" http-equiv="content-type">
	<title>
		EMPRESA - Publicar Oferta
	</title>
</head>


<?php
  session_start();
	$sesion = $_SESSION["var_sesion"]; 
			echo $sesion; 
  $desc=$_REQUEST['desc'];
  $puesto=$_REQUEST['puesto'];
  $sector=$_REQUEST['sector'];
  $vacan=$_REQUEST['vacan'];
  $contrato=$_REQUEST['contrato'];
  $hora=$_REQUEST['hora'];  
  $estu=$_REQUEST['estu'];
  $loc=$_REQUEST['loc'];
  $prov=$_REQUEST['prov'];  
  $exp=$_REQUEST['exp'];
  
  
  $conexion=mysqli_connect("localhost","root","","bolsaempleo") 
	or die("Problemas en la conexion");

	$query= "insert into oferta (CIF, DESCRIP, PUESTO, SECTOR, VACANTES, CONTRATO, HORARIO, ESTUDIOS, LOC, PROV, EXPMIN)
	values ('$sesion','$desc','$puesto','$sector',$vacan,'$contrato','$hora','$estu','$loc','$prov',$exp) "
	or die ("Problemas en el insert". mysqli_error($conexion));
	
	mysqli_query($conexion,$query);
	print ("La oferta de trabajo ha sido publicada");
	
	mysqli_close($conexion);

	Header("Location: ofertas_emp.php");
?>


</body>