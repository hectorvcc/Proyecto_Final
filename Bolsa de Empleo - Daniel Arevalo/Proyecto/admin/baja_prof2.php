 
	<?php
	

		$ID=$_REQUEST['id'];
		echo "ID: ".$ID;
				$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
				$query= "DELETE FROM PROFESORES WHERE IDPROF= $ID" or die ("Problemas en el select". mysqli_error($conexion));	
				$cons=mysqli_query($conexion,$query);
				mysqli_fetch_array($cons);
				$cantidad = mysqli_affected_rows($conexion);
				
				mysqli_close($conexion);	
				
				Header("Location: ver_prof.php");

	?>
