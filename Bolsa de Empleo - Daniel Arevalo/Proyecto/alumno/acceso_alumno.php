<HTML LANG="es">

	<style>
		*{
		margin:0px;
		padding:0px;
		}

		html{
			font-family: Geneva, sans-serif;
			background-color:salmon;
		}

		header#header{
			margin:30px auto;
			width:840px;
			height:100px;
			
		}
		
		div.titulo{
			text-align:center;
			margin:50px auto;
			height:120px;
			color: #dfe9ec;
			font: bold 25px 'Myriad Pro',Arial,Helvetica,sans-serif;
			padding: 10px 0;
			background:#a0cad5;
			width:100%;
			text-shadow: 1px 1px 1px #222, -2px 2px 1px #ccc, -3px 3px 1px #222;
			border-radius:20px 20px 20px 20px;
		}

		p{
			margin:20px auto;
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

		div#acceso p{
			font: bold 15px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			color: rgba(0, 255, 106, 1);;
		}
		div#acceso h1{
			color: white;
			font: bold 45px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 11px salmon;
		}
		
		div#acceso{
			width:840px;
			border-radius:100px 25px 100px 25px;
			text-align:center;
			margin:70px auto;
			height:auto;
			color: white;
			font: bold 15px 'Futura',Arial,Helvetica,sans-serif;
			padding: 10px 0;
			background: rgba(69, 193, 255, 0.3);
		}
		div#form{
			margin:20px auto;
			
		}
		div#h1{
			margin:30px auto;
		}
		
		input[type=text], input[type=password] {
			margin: 5px;
			padding: 0 10px;
			width: 300px;
			height: 55px;
			color: salmon;
			background: white;
			border: 55px;
			font-size: 20px;
			border-radius: 12px;
			
			-moz-outline-radius: 8px;
			-webkit-box-shadow: inset 4px 4px 4px rgba(33, 44, 233, 0.5);
			
		}
		input:focus {
			
			outline-offset: 0;
			-webkit-box-shadow: 1px 5px 75px #4aeaff;
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
		.salir p{
			text-align: left;
		}
		img#inicio{
			width: 50px;
			height: 50px;
			margin: 0px 0px 0px 20px;
			
		}
	
		</style>
	<HEAD>
	   <TITLE>ALUMNOS - Acceso </TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <!-- <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css"> -->
	</HEAD>

	<BODY>

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
			<div id="acceso">
				<div id="h1">
					<H1>ACCESO ALUMNOS</H1>
				</div>
				<div id="form">
					<FORM CLASS="borde" ACTION="acceso_alumno.php" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
						<p>
							<INPUT class="input" TYPE="text" id="dni" maxlength="9" NAME="dni"  placeholder="DNI o NIE" required pattern="([0-9]{8}([A-Z]|[a-z]))|(([X|Y|Z]|[x|y|z])[0-9]{7}([A-Z]|[a-z]))" title="DNI:12345678X o NIE: [XYZ]1234567X"> 
						</p>
						<p>
							<INPUT class="input" TYPE="password" id="exp" maxlength="5" placeholder="Nº Expediente" NAME="numexp" required>
						</p>
						<p>	
							<INPUT class="submit" TYPE="submit" NAME="aceptar" VALUE="">
						</p>
						
					</FORM>
				</div>
				<div id="salir" class="salir">
				<p>
					<a href="/Proyecto"><img id="inicio" src="/Proyecto/botones/inicio.gif"></a>
				</p>
				</div>
			</div>
		<?php
			session_start(); 

			if (isset($_POST['aceptar']))
			{
				$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
				$dni = $_POST['dni'];
				$exp= $_POST['numexp'];
				$dni = strtoupper($dni);
				$query= "select * from ALUMNOS where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conexion));	
				$cons=mysqli_query($conexion,$query);		
				$vacio=true;
				
				while ($fila=mysqli_fetch_array($cons))
				{
					$vacio=false;
					$exp_bd=$fila['EXP'];					
				}
				
				if($vacio)
				{	
					echo '<script type="text/javascript">
							alert("No está dado de alta en el sistema. Contacte con su tutor.");
						</script>';
				}
				else
				{
			
					if ($exp==$exp_bd){
					
						$_SESSION["var_sesion"] = $dni; 
					
						$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
						$query= "select * from CURRICULUM where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conexion));	
						$cons=mysqli_query($conexion,$query);
						$cantidad = mysqli_affected_rows($conexion);
						mysqli_close($conexion);	
						
						if ($cantidad==0){Header("Location: primer_acceso.php"); }
						else {Header("Location: menu_alumno.php"); }
											 
					}
					else{
				
						echo '<script type="text/javascript">
							alert("El número de Expediente no es correcto.");
						</script>';
					}
				}	 
			}
		?>	
		
	</div>
	</BODY>
</HTML>