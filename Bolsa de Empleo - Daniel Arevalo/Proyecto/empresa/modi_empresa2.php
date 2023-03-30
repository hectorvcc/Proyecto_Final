	<?php
	
session_start(); 
		$sesion = $_SESSION["var_sesion"]; 
	if (isset($_POST['aceptar'])){
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
  
				$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
				$query= "UPDATE EMPRESA SET NOMBRE='$nom',DIREC='$dir',LOC='$loc',PROV='$prov',CP='$cp',TEL='$tel',WEB='$web',NOM_REP='$nom_con',TEL_REP='$tel_con',MAIL_REP='$mail_con' WHERE CIF= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
				$cons=mysqli_query($conexion,$query);
				mysqli_close($conexion);	
				echo '<script type="text/javascript">
							alert("Datos de la empresa modificados correctamente.");
						</script>';
				Header("Location: menu_empresa.php");
		}
	?>