<html>
<head>
	<meta content="text/html; charset=UTF-8;" http-equiv="content-type">
	<title>
		EMPRESA - Gestión de oferta 
	</title>
</head>


<?php
  
  $dni=$_REQUEST['dni'];
  $id=$_REQUEST['id'];
  $n=$_REQUEST['n'];
  $est=$_REQUEST['est'];
  
  if($est==0){$est=1;}else{$est=0;}
	$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
	if($n==1){
		$query= "UPDATE PROCESO SET LLAMADA = $est WHERE IDOFERTA = $id AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
	} else if($n==2){
		$query= "UPDATE PROCESO SET ENTREVISTA = $est WHERE IDOFERTA = $id AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
	} else if($n==3) {
		$query= "UPDATE PROCESO SET CONTRATO = $est WHERE IDOFERTA = $id AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
	}
	
	mysqli_query($conexion,$query);
	$cantidad = mysqli_affected_rows($conexion);
	mysqli_close($conexion);
  
	echo "ID: ".$id." -- estado:".$est;
  
	Header("Location: lista_alu.php?id=$id");
?>


</body>
</HTML>