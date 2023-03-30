<HTML LANG="es">

<style>
	.imag{
			width: 65px;
			height: 65px;
		}
	</style>
	<HEAD>
	   <TITLE>ADMINISTRACIÓN - Baja de Profesores</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>
	
	<BODY>	
		<?php 
			$ID=$_REQUEST['id']	;
			
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from PROFESORES where IDPROF= $ID" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
			mysqli_close($conexion);	
		?>
<div id="menu" class="div">
						<div class="ima">
							<img class="foto" src="/Proyecto/botones/admin.png">
						</div>
						<div class="ul">
							<ul>
									<a href="alta_prof.php"><li>Alta de tutores de FCT</li></a>
									<a href="ver_prof.php"><li>Ver Profesores</li></a>
									<a href="cambio.php"><li>Cambiar mi Usuario / Password</li></a>
									<a href="index.php"><li>Salir</li></a>
							</ul>
						</div>
			</div>
				
			<div id="pagina" >
				<div id="head">
					<header id="header">
						<div class="titulo">
								<img class="sim" style="float:left;" src="/Proyecto/ies.gif">
								<h1>IES ENRIQUE TIERNO GALVÁN</h1>
								<p>BOLSA DE EMPLEO</p>
						</div>
					</header>
				</div>

				
					<div id="principal" class="div">
					
					<h1 class="h1">BAJA DE <?php echo $fila['NOMBRE'] ?></h1>
		
		
					<?php
								$conex=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								$select= "SELECT * FROM ALUMNOS WHERE IDPROF= $ID " or die ("Problemas en el select". mysqli_error($conex));
								$con=mysqli_query($conex,$select);
								mysqli_fetch_array($con);
								$cantidad = mysqli_affected_rows($conex);
								
								if($cantidad>0){
								?>
									<div class="acceso">
											<P class="pp">No puedes dar de baja el profesor. Tiene alumnos dados de alta.</p>		
											<P class="pp"><a href="ver_prof.php"><img class="imag" src="/Proyecto/botones/volver-2.gif"></a></p>
										</div>
								<?php
									} else{
										
								?>	
											<div class="acceso">
													
													<P class="pp">Si das de baja el profesor definitivamente, este perderá su acceso y con ello las opciones de gestionar la bolsa de empleo.</P><P class="pp">¿Estás seguro?</p>
													<p align="center">
														<table>
															<tr>
																<td width="150"><p><a href="ver_prof.php"><img class="imag" src="/Proyecto/botones/cruz.gif"></a></p></td>
																<td><p><a href="baja_prof2.php?id=<?php echo $ID; ?>"><img class="imag" src="/Proyecto/botones/tick.gif"></a></p></td>
															</tr>

													</p>
													
											</div>
										
									<?php
								}
								
								mysqli_close($conex);
							?>
						</div>
	</BODY>
</HTML>