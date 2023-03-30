<html>

	<head>
		<meta content="text/html; charset=UTF-8;" http-equiv="content-type">
		<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
		<title>
			Profesor - Alta Alumnos
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
		color: purple;
		font: bold 21px Comic Sans MS,Arial,Helvetica,sans-serif;
	}
	.pp{
		text-align: center;
		color: purple;
		font: bold 28px Comic Sans MS,Arial,Helvetica,sans-serif;
	}
	input[type=text], input[type=number], input[type=password] {
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
			width: 840px;
			border-radius:150px 75px 150px 75px;
			text-align:center;
			margin: 5px auto;
			height: 340px;			
			font: bold 15px 'Futura',Arial,Helvetica,sans-serif;
			padding: 3%;
			background: rgba(255, 255, 255, 0.3);
		}
		
	</style>


	<BODY>
	<?php
			session_start(); 
			$sesion = $_SESSION["var_sesion"];
			//echo $sesion;
		
			if (isset($_POST['aceptar'])){
				$nom=$_REQUEST['nombre'];
				$dni=$_REQUEST['dni'];
				$exp=$_REQUEST['exp'];
				$dni = strtoupper($dni);

				$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
				$query= "select * from ALUMNOS where DNI = '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
				mysqli_query($conexion,$query);	
				$cantidad = mysqli_affected_rows($conexion);
				mysqli_close($conexion);
				if($cantidad==0){
					$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
					$query= "insert into ALUMNOS values ('$dni',$exp,$sesion,'$nom')" or die ("Problemas en el insert". mysqli_error($conexion));
					mysqli_query($conexion,$query);	
					mysqli_close($conexion);
					
					echo "<script type=\"text/javascript\">
							alert(\"".$nom." ha sido dado de alta correctamente\");
						</script>";
				}else{
					echo '<script type="text/javascript">
							alert("No se ha podido realizar el alta. El alumno ya está en el sistema.");
						</script>';
				}
			}		
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
					
					<h1 class="h1">Alta de Alumnos en la Bolsa de Empleo</h1>
					<div id="acceso">
					<P class="pp">Introduzca los datos de acceso del Alumno:</P>
					<FORM CLASS="borde" ACTION="alta_alum.php" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
						<p align="center">
							<table class="tabla" width="500">
								<tr >
									<td><p class="p">Nombre  </p></td><td><p class="p"><INPUT TYPE="text" maxlength="30" NAME="nombre" placeholder = "Nombre Alumno" required></p></td>
								</tr>
								<tr>
									<td><p class="p">DNI / NIE</p></td><td><p class="p"><INPUT TYPE="text" maxlength="9" NAME="dni"  placeholder="DNI o NIE" pattern="([0-9]{8}([A-Z]|[a-z]))|(([X|Y|Z]|[x|y|z])[0-9]{7}([A-Z]|[a-z]))" title="DNI:12345678X o NIE: [XYZ]1234567X" required></p></td>
								</tr>
								<tr>
									<td><p class="p">Nº de Expediente</p></td><td><p class="p"><INPUT TYPE="number" min="1000" max="10000" NAME="exp" placeholder="Nº Expediente" required></p></td>
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
</html>