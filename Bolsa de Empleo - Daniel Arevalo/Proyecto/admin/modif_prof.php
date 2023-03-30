<html>

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
<head>
	<meta content="text/html; charset=UTF-8;" http-equiv="content-type">
	 <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	<title>
		ADMINISTRACIÓN - Modificar Profesor
	</title>
</head>


<BODY>
<?php

	$ID=$_REQUEST['id'];

	$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
	$query= "select * from PROFESORES where IDPROF= $ID" or die ("Problemas en el select". mysqli_error($conexion));	
	$cons=mysqli_query($conexion,$query);	
	$fila=mysqli_fetch_array($cons);
	
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
					
					<h1 class="h1">MODIFICAR ACCESO DE <?php echo $fila['NOMBRE'] ?></h1>
					<div id="acceso">
					<P class="pp">Modifique los datos:</P>
					<FORM CLASS="borde" ACTION="modif_prof2.php?id=<?php echo $ID ?>" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
						<p align="center">
							<table class="tabla" width="500">
								<tr >
									<td><p class="p">Nombre Profesor: </p></td><td><p class="p"><INPUT TYPE="text" maxlength="30" NAME="nombre"   placeholder="Nombre Profesor" value="<?php echo $fila['NOMBRE'] ?>" required></p></td>
								</tr>
								<tr>
									<td><p class="p">Usuario:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="15" NAME="usu"  placeholder="DNI o NIE" value="<?php echo $fila['USU'] ?>" required></p></td><!-- pattern="([0-9]{8}([A-Z]|[a-z]))|(([X|Y|Z]|[x|y|z])[0-9]{7}([A-Z]|[a-z]))" title="DNI:12345678X o NIE: [XYZ]1234567X" --> 
								</tr>
								<tr>
									<td><p class="p">Clave de acceso:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="15" NAME="pass"  placeholder="Password" value="<?php echo $fila['PASS'] ?>" required></p></td>
								</tr>
								<tr>								
									<td colspan="2"><p align="center"><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p></td>
								</tr>
							</table>	
						</p>
						</div>
					</FORM>
					
				</div>
			</div>

	</BODY>
</HTML>