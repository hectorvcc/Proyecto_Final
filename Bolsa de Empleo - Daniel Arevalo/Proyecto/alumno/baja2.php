		<?php
		
		//$sesion=$_REQUEST['dni'];
		session_start();
		$sesion = $_SESSION["var_sesion"]; 
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from curriculum where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
			mysqli_close($conexion);	
			
			$nombreDirectorio = "imagenes/";
			
			$nombreCompleto = $nombreDirectorio.$sesion;
			unlink($nombreCompleto);
	
				$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
				
				$query= "DELETE FROM ALUMNOS WHERE DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
				mysqli_query($conexion,$query);
				$query2= "DELETE FROM CURRICULUM WHERE DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
				$query3= "DELETE FROM CEXPERIENCIA WHERE DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
				$query4= "DELETE FROM CIDIOMA WHERE DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
				$query5= "DELETE FROM CESTUDIOS	WHERE DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
				$query6= "DELETE FROM INSCRITOS	WHERE DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));
				$query7= "DELETE FROM PROCESO WHERE DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));
				
				
				mysqli_query($conexion,$query2);
				mysqli_query($conexion,$query3);
				mysqli_query($conexion,$query4);
				mysqli_query($conexion,$query5);
				mysqli_query($conexion,$query6);
				mysqli_query($conexion,$query7);
				
				mysqli_close($conexion);	
				
				session_destroy();
				
				Header("Location: acceso_alumno.php");
		
		?>