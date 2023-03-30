<HTML LANG="es">

<style>

		input[type=submit]{
			border-style: none;
			border-color: inherit;
			border-width: 0;
			background: url('/Proyecto/botones/aceptar-3.gif') no-repeat 0 0;
			cursor: pointer;
			width: 142px;
			height: 50px;
			text-align: left;
		}	
</style>
	<HEAD>
	   <TITLE>ADMINISTRACIÓN - Modificación acceso</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>	
	<BODY>
		<?php 
			
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from PROFESORES where IDPROF=1" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
		//	mysqli_close($conexion);	
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
					
					<h1 class="h1">Modifique de Acceso del Administrador</h1>	
		
					<div id="acceso">
								<P class="pp">Modifique su usuario:</P>
								<form name="cambioUsu" action="cambio.php" method="POST">
									<p align="center">
										<table class="tabla" width="500">
											<tr >
												<td><p class="p">Usuario Actual:  </p></td><td><p class="p"><INPUT TYPE="text" maxlength="15" NAME="usu" title="Inserte el Usuario actual" placeholder="Usuario Actual" required></p></td>
											</tr>
											<tr>
												<td><p class="p">Nuevo Usuario:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="15" NAME="usuNuevo" title="Inserte el Nuevo Usuario" placeholder="Nuevo Usuario" required>
											</tr>
											<tr>
												<td colspan="2">
								<?php	
								
								if (isset($_POST['cambiousu']))
								{
									$usu_bd=$fila['USU'];
											if ($usu_bd==$_POST['usu'])
											{
												$usuNuevo = $_POST['usuNuevo'];
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "UPDATE PROFESORES SET USU= '$usuNuevo' WHERE IDPROF=1" or die ("Problemas en el select". mysqli_error($conexion));	
												$cons=mysqli_query($conexion,$query);
												mysqli_close($conexion);	
													
												echo '<p align="center" style="color: lightgreen">EL USUARIO HA SIDO MODIFICADO';
											}
											else{
												echo '<p align="center" style="color: tomato">EL USUARIO ACTUAL NO COINCIDE';
											}
									}
								?>
												</p></td>
											</tr>
											<tr>								
												<td colspan="2"><p align="center"><INPUT TYPE="submit" NAME="cambiousu" VALUE=""></p></td>
											</tr>
										</table>	
									</p>
									</div>
								</FORM>
					</div>
					
					<div id="acceso">
								<P class="pp">Modifique su contraseña:</P>
								<form name="cambioPass" action="cambio.php" method="POST">
									<p align="center">
										<table class="tabla" width="500">
											<tr >
												<td><p class="p">Clave Actual: </p></td><td><p class="p"><INPUT TYPE="password" maxlength="15" NAME="clave" title="Inserte la clave actual" placeholder="Clave Actual" required></p></td>
											</tr>
											<tr>
												<td><p class="p">Nueva Clave:</p></td><td><p class="p"><INPUT TYPE="password" maxlength="15" NAME="claveNueva" title="Inserte la Nueva clave" placeholder="Nueva Clave" required>
											</tr>
											<tr>
												<td colspan="2">
											
								 
									<?php
										if (isset($_POST['cambiopass']))
										{
											$pass_bd=$fila['PASS'];
												if ($pass_bd==$_POST['clave'])
												{
													$claveNueva = $_POST['claveNueva'];
													$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
													$query= "UPDATE PROFESORES SET PASS= '$claveNueva' WHERE IDPROF=1" or die ("Problemas en el select". mysqli_error($conexion));	
													$cons=mysqli_query($conexion,$query);
													mysqli_close($conexion);	
														
													echo '<p align="center" style="color: lightgreen">EL PASSWORD HA SIDO MODIFICADO';
												}
												else{
													echo '<p align="center" style="color: tomato">EL PASSWORD ACTUAL NO COINCIDE';
												}

										}
									?>
										</p></td>
											</tr>
											<tr>								
												<td colspan="2"><p align="center"><INPUT TYPE="submit" NAME="cambiopass" VALUE=""></p></td>
											</tr>
										</table>	
									</p>
									</div>
								</FORM>
					</div>
					</body>
					</html>
					
			</div>
		
		
		
	
	<DIV>

	</BODY>
</HTML>