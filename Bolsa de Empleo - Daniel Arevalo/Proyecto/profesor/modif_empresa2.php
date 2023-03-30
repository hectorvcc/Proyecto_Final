<?php
	$CIF=$_REQUEST['CIF'];
	
	$nom=$_REQUEST['nombre'];
  $dir=$_REQUEST['dir'];
  $loc=$_REQUEST['loc'];
  $cp=$_REQUEST['cp'];
  $prov=$_REQUEST['prov'];;
  $tel=$_REQUEST['tel'];
  $web=$_REQUEST['web'];
  $nom_con=$_REQUEST['nom_con'];
  $tel_con=$_REQUEST['tel_con'];
  $mail_con=$_REQUEST['mail_con'];
  
	echo $nom.$dir.$loc.$cp.$prov.$tel.$tel_con;
	
		$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
		$query= "UPDATE EMPRESA SET NOMBRE='$nom',DIREC='$dir',LOC='$loc',PROV='$prov',CP='$cp',TEL='$tel',WEB='$web',NOM_REP='$nom_con',
		TEL_REP='$tel_con',MAIL_REP='$mail_con' WHERE CIF= '$CIF'" or die ("Problemas en el select". mysqli_error($conexion));	
		$cons=mysqli_query($conexion,$query);
				
		$cantidad = mysqli_affected_rows($conexion);
		mysqli_close($conexion);	
		
		Header("Location: ver_empresas.php"); 
	echo $cantidad." ".$CIF;
	
?>
