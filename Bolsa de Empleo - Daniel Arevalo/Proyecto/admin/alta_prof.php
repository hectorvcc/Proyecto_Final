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
			Administrador - Alta Profesores
		</title>
	</head>

	<BODY>
	
	<div id="menu" class="div" >
			<div class="ima">
				<img class="foto"  src="/Proyecto/botones/admin.png">
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
		<div id="principal">
			
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
					
					<h1 class="h1">Alta de Profesores Tutores de FCT</h1>
					<div id="acceso">
					<P class="pp">Introduzca los datos de acceso del Profesor:</P>
					<FORM CLASS="borde" ACTION="alta_prof.php" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
						<p align="center">
							<table class="tabla" width="500">
								<tr >
									<td><p class="p">Nombre  </p></td><td><p class="p"><INPUT TYPE="text" maxlength="30" NAME="nombre" title="Inserte el nombre del Profesor" placeholder = "Nombre del Profesor" required></p></td>
								</tr>
								<tr>
									<td><p class="p">Usuario</p></td><td><p class="p"><INPUT TYPE="text" maxlength="15" NAME="usu" title="Inserte el Usuario" placeholder="Usuario" required><!-- pattern="([0-9]{8}([A-Z]|[a-z]))|(([X|Y|Z]|[x|y|z])[0-9]{7}([A-Z]|[a-z]))" title="DNI:12345678X o NIE: [XYZ]1234567X" --> 
								</tr>
								<tr>
									<td><p class="p">Clave de acceso:</p></td><td><p class="p"><INPUT TYPE="password" maxlength="15" NAME="pass" title="Inserte la Clave" placeholder="Password" required></p></td>
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
	</div>
		<?php
		
			if (isset($_POST['aceptar'])){
				$nom=$_REQUEST['nombre'];
				$pass=$_REQUEST['pass'];
				$usu=$_REQUEST['usu'];
				
				$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
				$query= "select * from PROFESORES where usu='$usu'" or die ("Problemas en el insert". mysqli_error($conexion));
				mysqli_query($conexion,$query);	
				$cantidad = mysqli_affected_rows($conexion);
				echo $usu;
				echo $cantidad;
				if ($cantidad==0){
					$query= "insert into PROFESORES(usu,pass, nombre) values ('$usu','$pass','$nom')" or die ("Problemas en el insert". mysqli_error($conexion));
					mysqli_query($conexion,$query);	
					
					echo "<script type=\"text/javascript\">
							alert(\"El tutor de FCT ".$nom." ha sido dado de alta.\");
						</script>";
				}
				else {
					echo '<script type="text/javascript">
							alert("El usuario ya existe");
						</script>';
				}
				
				mysqli_close($conexion);
				//mysqli_close($conexion);							
				//$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");				
			}		
		?>

		
	</BODY>
</html>
