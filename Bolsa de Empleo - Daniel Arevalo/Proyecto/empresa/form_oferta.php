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
	   <TITLE>EMPRESA - Ofertas de trabajo</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>

<BODY>


<?php
	session_start();
	$sesion = $_SESSION["var_sesion"]; 
			
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select FOTO from EMPRESA where CIF= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
			mysqli_close($conexion);

?>
<div id="menu" class="div" >
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
					<h1 class="h1">PUBLICAR OFERTA DE TRABAJO</h1>
					<div id="acceso">
					<P class="pp">Introduzca los datos de la oferta:</P>
					<FORM CLASS="borde" ACTION="alta_oferta.php" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
						<p align="center">
							<table class="tabla" width="1100">
								<tr>
									<td><p class="p5">Puesto:</p></td>
									<td><p class="p">
											<select name="puesto" placeholder="Puesto" class="sel">
													<?php
															$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
														$query= "select puesto from puesto" or die ("Problemas en el select". mysqli_error($conexion));	
														
														$cons=mysqli_query($conexion,$query);		
														while ($fila=mysqli_fetch_array($cons))
														{
															print ("<option value=\"".$fila['puesto']."\">".$fila['puesto']."</option>");
														}
														mysqli_close($conexion);	
													?>
											</select>
									</p></td>

									<td><p class="p5">Nº de Vacantes:</p></td><td><p class="p"><INPUT TYPE="number" min="0" max="100" NAME="vacan" placeholder="Nº Vacantes"></p></td>
								</tr>
								<tr>
									<td><p class="p5">Contrato:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="25" NAME="contrato" required title="Inserte un contrato" placeholder="Contrato"></p></td>
									<td><p class="p5">Horario:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="20" NAME="hora" placeholder="Horario"></p></td>
								</tr>
								<tr>
									<td><p class="p5">Estudios Requeridos:</p></td><td><p class="p"><select name="estu" placeholder="Estudios"  class="sel">
																<?php
																	$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
																	$query= "select estudio from estudio" or die ("Problemas en el select". mysqli_error($conexion));	
																	$cons=mysqli_query($conexion,$query);		
																	while ($fila=mysqli_fetch_array($cons))
																	{
																		print ("<option value=\"".$fila['estudio']."\">".$fila['estudio']."</option>");
																	}
																	mysqli_close($conexion);	
																?>
											</select></p></td>
									<td ><p class="p5">Experiencia Mínima:</p></td><td><p class="p"><INPUT TYPE="NUMBER" min="0" max="15" NAME="exp"  placeholder="Experiencia mínima"></p></td>
								</tr>
								<tr>
									<td><p class="p5">Provincia:</p></td><td><p class="p"><input list="prov" name="prov"  placeholder="Provincia"  class="sel">
											<datalist id="prov">
												<?php
													$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
													$query= "select nombre from provincia" or die ("Problemas en el select". mysqli_error($conexion));	
													$cons=mysqli_query($conexion,$query);		
													while ($fila=mysqli_fetch_array($cons))
													{
														print ("<option value=\"".$fila['nombre']."\">".$fila['nombre']."</option>");
													}
													mysqli_close($conexion);	
												?>
											</datalist></p></td>

									<td><p class="p5">Localidad:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="50" NAME="loc" placeholder="LOCALIDAD"></p></td>
								</tr>

								<tr>
									<td colspan="2"><p class="p5">Descripción:</p></td><td colspan="2" height="133"> <p class="p"><TEXTAREA  class="sel" rows="2400" cols="10" required title="Inserte una descipción" maxlength="200" NAME="desc" required placeholder="Descripción de la oferta de trabajo..."></textarea></p></td>
								</tr>
								<tr>
									<td colspan="4"><p align="center"><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p></td>
								</tr>
							</table>	
						</p>
						</div>
					</FORM>
					
				</div>
		</div>
<br><a href="menu_empresa.php">Volver</a>

</BODY>
</HTML>

