<HTML LANG="es">

	<style>
	.imag{
			width: 65px;
			height: 65px;
		}
	</style>

	<HEAD>
	   <TITLE>EMPRESA - Baja del sistema </TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>

	
	<BODY>
		<?php 
			session_start(); 
			
			$sesion = $_SESSION["var_sesion"]; 
		
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from EMPRESA where CIF= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
			mysqli_close($conexion);	
		?>
		
		<div id="menu" class="div">
						<div class="ima">
							<img class="foto"  src="<?php echo $fila['FOTO'];?>">
						</div>
						<div class="ul">
						
							<ul>
								<a href="modi_empresa.php"><li>Modificar Datos de Empresa</li></a>
								<a href="form_oferta.php"><li>Publicar oferta de Empleo</li></a>
								<a href="ofertas_emp.php"><li>Gestión de ofertas</li></a>
								<a href="cambio.php"><li>Modificar clave de acceso</li></a>
								<a href="baja_empresa.php"><li>Darse de baja del servicio</li></a>
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
							
							<h1 class="h1">BAJA DE <?php echo $fila['NOMBRE']; ?></h1>
	
							<?php
								$conex=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								$select= "SELECT * FROM OFERTA WHERE CIF= '$sesion' AND ESTADO=1" or die ("Problemas en el select". mysqli_error($conex));
								$con=mysqli_query($conex,$select);
								mysqli_fetch_array($con);
								$cantidad = mysqli_affected_rows($conex);
								
								if($cantidad>0){
								?>
									<div class="acceso">
											<P class="pp">No puedes dar de baja la empresa. Tiene ofertas activas</p>		
											<P class="pp"><a href="menu_empresa.php"><img class="imag" src="/Proyecto/botones/volver-2.gif"></a></p>
								<?php
									} else{
										
								?>	
											<div class="acceso">
													
													<P class="pp">Si das de baja la empresa definitivamente, perderás todo el contacto con los alumnos y no podrás publicar ofertas de empleo.</P><P class="pp">¿Estás seguro?</p>
													<p align="center">
														<table>
															<tr>
																<td width="150"><p><a href="menu_empresa.php"><img class="imag" src="/Proyecto/botones/cruz.gif"></a></p></td>
																<td><p><a href="baja_empresa2.php"><img class="imag" src="/Proyecto/botones/tick.gif"></a></p></td>
															</tr>

													</p>
													
											</div>
										
									<?php
								}
							?>
	
					</div>
			</div>
		
		
		
	</BODY>
</HTML>
