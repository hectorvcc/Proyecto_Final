<html>
	<head>
		<meta content="text/html; charset=UTF-8;" http-equiv="content-type">
		<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
		<title>
			PROFESOR - Modificar Empresa
		</title>
	</head>
	<style>
	img.foto{
		width:100px;
		height: 150px;
 		display: block;
	
		margin: 5px 22px 22px 55px;
		background-color: rgba(255,255,255,.4); 
		padding: 4%;
		border-radius:40%;
		transition:box-shadow .4s;
				
	}

a:link   
{   
 text-decoration:none;   
}  
	div#menu ul li:hover{
		padding-left:50px;
		background-color: white;
		color: lightskyblue;
		-moz-box-shadow: 17px 6px 41px white;
		-webkit-box-shadow: 17px 6px 41px white;
		font: bold 21px 'Comic Sans MS',Arial,Helvetica,sans-serif;
	}
	div#menu{
		width: 15%;
		float:left;
		margin-top:20px;
		height: 100%;
		position:relative;
        display:block;
	}
	
	div#pagina{
		margin: 1% auto;
		width: 85%;
		float: left;
		height: auto;
		
	}
	div#principal{
		width: auto;
		height: auto;
		margin: 4%;
	}
	.h1{
			margin: 0px 110px 20px 110px;
			color: white;
			font: bold 55px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 11px blue;
			text-align:center;
		}
	
			p{
			margin:10px auto;
			color: white;
			font: bold 25px 'Myriad Pro',Arial,Helvetica,sans-serif;
		}
		
		img.sim{
			margin:20px;
			padding:20px auto;
			background-color: rgba(255,255,255,.6);
			width:25px;
			border-radius:50%;
			transition:box-shadow .4s;
		}
	.ima{
		position:absolute;
        display:block;
		margin: 20px 0px 0px 0px;
	}
	.ul{
		margin: 222px 0px 0px 0px;
		position:absolute;
        display:block;
	}
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
	input[type=text], input[type=date], input[type=password], input[type=email], .prov{
			margin: 5px;
			padding: 0 10px;
			width: 220px;
			height: 30px;
			color: Blue;
			background: white;
			border: 100px;
			font-size: 20px;
			border-radius: 18px;
			
			-moz-outline-radius: 8px;
			-webkit-box-shadow: inset 5px 5px 22px rgba(11, 88, 255, 0.7);
			
		}
		div#acceso{
			width: 80%;
			border-radius:150px 75px 150px 75px;
			text-align:center;
			margin: 5px auto;
			height: auto;			
			font: bold 15px 'Futura',Arial,Helvetica,sans-serif;
			padding: 3%;
			background: rgba(255, 255, 255, 0.3);
		}
		.b{
			width: 70px;
			height: 70px;
		}
	</style>



	<BODY>

			<?php
				
				$CIF=$_REQUEST['CIF'];
				$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
				$query= "select * from EMPRESA where CIF= '$CIF'" or die ("Problemas en el select". mysqli_error($conexion));	
				$cons=mysqli_query($conexion,$query);
				$fila=mysqli_fetch_array($cons);

			?>
		<div id="menu" class="div">
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
					
					
						<FORM CLASS="borde" ACTION="modif_empresa2.php?CIF=<?php echo $CIF ?>" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
							<p align="center">
								<table class="tabla" width="888">
									<tr>
										<td colspan="2"><p class="p2">Nombre:</td></p><td colspan="2"><p class="p"><INPUT TYPE="text" maxlength="25" NAME="nombre" required title="Ingrese la Empresa" placeholder="Nombre Empresa" value="<?php echo $fila['NOMBRE'] ?>"></td></p>
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
												$query= "select * from EMPRESA where CIF= '$CIF'" or die ("Problemas en el select". mysqli_error($conexion));	
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
														
															<td><p class="p1">Nombre Contacto:</td></p><td><p class="p1"><INPUT TYPE="text" maxlength="25" NAME="nom_con" required title="Ingrese un Contacto" placeholder="Nombre Contacto" value="<?php echo $fila['NOM_REP'] ?>"></td></p>
															<td><p class="p1">Teléfono Contacto:</td></p><td><p class="p1"><INPUT TYPE="text" maxlength="11" NAME="tel_con" placeholder="Teléfono Contacto" value="<?php echo $fila['TEL_REP'] ?>"></td></p>
														</tr>
														<tr>
															<td><p class="p1">Email:</td></p><td><p class="p1"><INPUT TYPE="email" NAME="mail_con"  placeholder="example@domain.com" required value="<?php echo $fila['MAIL_REP'] ?>"></td></p>
															<td><p class="p1">Web:</td></p><td><p class="p1"><INPUT TYPE="text" NAME="web"   placeholder="Página Web" required value="<?php echo $fila['WEB'] ?>"></td></p>
														</tr>
														<tr>
															<td colspan="2" class="p1"><p><a href="ver_empresas.php"><img class="b" src="/Proyecto/botones/volver-2.gif"></a></p></td>
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