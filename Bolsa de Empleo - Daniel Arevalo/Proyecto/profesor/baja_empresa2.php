 
	<?php
	$CIF=$_REQUEST['CIF'];
		echo "CIF: ".$CIF;
		
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "DELETE FROM EMPRESA WHERE CIF= '$CIF'" or die ("Problemas en el select". mysqli_error($conexion));	
			mysqli_query($conexion,$query);
			
			$cantidad = mysqli_affected_rows($conexion);
			
				mysqli_close($conexion);	
				echo $cantidad;
				if ($cantidad==1){Header("Location: ver_empresas.php");}
				
	?>
