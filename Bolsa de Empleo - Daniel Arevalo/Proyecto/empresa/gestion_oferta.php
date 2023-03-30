<html>
<head>
	<meta content="text/html; charset=UTF-8;" http-equiv="content-type">
	<title>
		EMPRESA - Gestión de oferta 
	</title>
</head>


<?php
  
  $est=$_REQUEST['est'];
  $id=$_REQUEST['id'];
  if($est==0){$est=1;}else{$est=0;}
  $conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
	$query= "UPDATE OFERTA SET ESTADO = $est WHERE ID = $id"
	or die ("Problemas en el insert". mysqli_error($conexion));
	mysqli_query($conexion,$query);
	$cantidad = mysqli_affected_rows($conexion);
	mysqli_close($conexion);
  
	echo "ID: ".$id." -- estado:".$est;
  
	Header("Location: ofertas_emp.php");
?>


</body>
</HTML>