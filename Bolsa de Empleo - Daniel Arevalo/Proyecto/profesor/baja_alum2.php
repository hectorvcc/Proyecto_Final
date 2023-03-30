 
	<?php
	
		$ID=$_REQUEST['id'];
		echo "ID: ".$ID;
				$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
				$query= "DELETE FROM ALUMNOS WHERE DNI= '$ID'" or die ("Problemas en el select". mysqli_error($conexion));	
				mysqli_query($conexion,$query);
				
					$conexion22=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
					$query22= "select * from CURRICULUM where DNI = '$ID'" or die ("Problemas en el insert". mysqli_error($conexion22));
					mysqli_query($conexion22,$query22);	
					$numFilas = mysqli_affected_rows($conexion22);
					mysqli_close($conexion22);
				
					if($numFilas>0){
						$query2= "DELETE FROM CURRICULUM WHERE DNI= '$ID'" or die ("Problemas en el select". mysqli_error($conexion));	
						$query3= "DELETE FROM CEXPERIENCIA WHERE DNI= '$ID'" or die ("Problemas en el select". mysqli_error($conexion));	
						$query4= "DELETE FROM CIDIOMA WHERE DNI= '$ID'" or die ("Problemas en el select". mysqli_error($conexion));	
						$query5= "DELETE FROM CESTUDIOS	WHERE DNI= '$ID'" or die ("Problemas en el select". mysqli_error($conexion));	
						$query6= "DELETE FROM INSCRITOS	WHERE DNI= '$ID'" or die ("Problemas en el select". mysqli_error($conexion));
						$query7= "DELETE FROM PROCESO WHERE DNI= '$ID'" or die ("Problemas en el select". mysqli_error($conexion));
						mysqli_query($conexion,$query2);
						mysqli_query($conexion,$query3);
						mysqli_query($conexion,$query4);
						mysqli_query($conexion,$query5);
						mysqli_query($conexion,$query6);
						mysqli_query($conexion,$query7);
					}
				
					
				$cantidad = mysqli_affected_rows($conexion);
				
				mysqli_close($conexion);	
				
				Header("Location: ver_alum.php");
				
		
	?>
