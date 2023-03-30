<html>


<HEAD>
	   <TITLE>EMPRESAS - Ofertas de Empleo</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>
	
	<STYLE>
	.p{
		padding: 1%;
		text-align: left;
		color: LightGoldenrodYellow;
		font: bold 21px Comic Sans MS,Arial,Helvetica,sans-serif;
		text-shadow:6px 4px 11px blue;
	}
	.p2{
		padding: 1%;
		text-align: center;
		color: LightGoldenrodYellow;
		font: bold 21px Comic Sans MS,Arial,Helvetica,sans-serif;
		text-shadow:6px 4px 11px blue;
	}
	.p1{
		padding: 1%;
		text-align: center;
		color: darkblue;
		font: bold 21px Comic Sans MS,Arial,Helvetica,sans-serif;
		text-shadow:6px 4px 11px aquamarine;
	}
	
	.pp{
		text-align: center;
		color: purple;
		font: bold 28px Comic Sans MS,Arial,Helvetica,sans-serif;
		text-shadow:6px 4px 11px white;
	}
	.b{
			width: 70px;
			height: 70px;
		}
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
	</STYLE>

	<BODY>
	<?PHP
		session_start(); 
		$sesion = $_SESSION["var_sesion"]; 
		
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from EMPRESA where CIF= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
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
					
					<h1 class="h1">MODIFICAR DATOS DE <?php echo $fila['NOMBRE'] ?></h1>
					<div id="acceso">
					<P class="pp">Modifique los datos:</P>
					
					
						<FORM CLASS="borde" ACTION="modi_empresa2.php" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
							<p align="center">
								<table class="tabla" width="888">
									<tr>
										<td colspan="2"><p class="p2">Nombre:</td></p><td colspan="2"><p class="p"><INPUT TYPE="text" maxlength="25" NAME="nombre" required title="Nombre de Empresa" placeholder="Nombre Empresa" value="<?php echo $fila['NOMBRE'] ?>"></td></p>
									</tr>
									<tr>
										<td><p class="p">Dirección:</td></p><td><p class="p"><INPUT TYPE="text" maxlength="25" NAME="dir" placeholder="Dirección" value="<?php echo $fila['DIREC'] ?>"></td></p>
										<td><p class="p">Localidad:</td></p><td><p class="p"><INPUT TYPE="text" maxlength="25" NAME="loc"   placeholder="Localidad" value="<?php echo $fila['LOC'] ?>"></td></p>
									</tr>
									<tr>
										<td><p class="p">Código Postal:</td></p><td><p class="p"><INPUT TYPE="text" maxlength="5" NAME="cp" placeholder="Código Postal" value="<?php echo $fila['CP'] ?>"></td></p>
										<td><p class="p">Provincia:</td></p><td><p class="p">
											<input class="prov" list="prov" name="prov" value="<?php echo $fila['PROV'] ?>">
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
											</datalist></td></p>
									</tr>
										<?php
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select * from EMPRESA where CIF= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
												$cons=mysqli_query($conexion,$query);	
												$fila=mysqli_fetch_array($cons);
												mysqli_close($conexion);
											?>
									<tr>
										<td colspan="2"><p class="p2" >Teléfono:</td></p><td colspan="2"><p class="p"><INPUT TYPE="text" maxlength="11" NAME="tel" placeholder="Teléfono" value="<?php echo $fila['TEL'] ?>"></td></p>
									</tr>
									
									
									<tr>	
													<table width="888">
														<tr >
															<td colspan="4"><p class="p1">Datos de contacto:</td></p>
														</tr>
														<tr>
														
															<td><p class="p1">Nombre Contacto:</td></p><td><p class="p1"><INPUT TYPE="text" maxlength="25" NAME="nom_con" required title="Nombre de Contacto" placeholder="Nombre Contacto" value="<?php echo $fila['NOM_REP'] ?>"></td></p>
															<td><p class="p1">Teléfono Contacto:</td></p><td><p class="p1"><INPUT TYPE="text" maxlength="11" NAME="tel_con" placeholder="Teléfono Contacto" value="<?php echo $fila['TEL_REP'] ?>"></td></p>
														</tr>
														<tr>
															<td><p class="p1">Email:</td></p><td><p class="p1"><INPUT TYPE="email" NAME="mail_con"  placeholder="example@domain.com" required value="<?php echo $fila['MAIL_REP'] ?>"></td></p>
															<td><p class="p1">Web:</td></p><td><p class="p1"><INPUT TYPE="text" NAME="web"   placeholder="Página Web" required title="Página web" value="<?php echo $fila['WEB'] ?>"></td></p>
														</tr>
														<tr>
															<td colspan="2" class="p1"><p><a href="menu_empresa.php"><img class="b" src="/Proyecto/botones/volver-2.gif"></a></p></td>
															<td colspan="4"><p align="center"><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p></td>
														</tr>
													</table>
											
									</tr>
																
						</FORM>
									
								</table>
								
							</p>
					</div>
						
				</div>
		</div>


	</BODY>
</HTML>




















