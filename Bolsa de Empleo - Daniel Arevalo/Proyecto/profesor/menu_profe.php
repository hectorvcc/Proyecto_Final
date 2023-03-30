<HTML LANG="es">

	<style>

	
	</style>
	
	<HEAD>
	   <TITLE>PROFESOR - Menú Principal </TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>
	
	<BODY>
	<?php 
	
		session_start(); 
		$sesion = $_SESSION["var_sesion"];
		
		
		$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
		$query= "select * from PROFESORES where IDPROF= $sesion" or die ("Problemas en el select". mysqli_error($conexion));	
		$cons=mysqli_query($conexion,$query);	
		$fila=mysqli_fetch_array($cons);
		mysqli_close($conexion);
	?>
	
	
		<div id="menu" class="div" >
			<div class="ima">
				<img class="foto" src="/Proyecto/botones/profesores-2.gif">
			</div>
			<div class="ul">
				<ul>
					<a href="alta_alum.php"><li>Alta de Alumnos</li></a>
					<a href="ver_alum.php"><li>Ver Alumnos</li></a>
					<a href="ver_inscritos.php"><li>Ver Alumnos Inscritos en Ofertas</li></a>
					<a href="/Proyecto/empresa/form_empresa.php?n=2"><li>Alta de Empresas</li></a>
					<a href="ver_empresas.php"><li>Ver Empresas</li></a>
					<a href="index.php"><li>Salir</li></a>
				</ul>
			</div>
		</div>
	
		<div id="pagina" >
				
				<header id="header">
					<div class="titulo">
							<img class="sim" style="float:left;" src="/Proyecto/ies.gif">
							<h1>IES ENRIQUE TIERNO GALVÁN</h1>
							<p>BOLSA DE EMPLEO</p>
					</div>
				</header>
		
				
				<div id="principal" >
					
					<h1 class="h1">ÁREA PRIVADA DE <?php echo $fila['NOMBRE'] ?></h1>
					
				</div>
		</div>
		
	</BODY>
</HTML>