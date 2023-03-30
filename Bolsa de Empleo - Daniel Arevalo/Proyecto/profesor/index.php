<HTML LANG="es">

	<STYLE>
		

		p{
			margin:20px auto;
			color: white;
			font: bold 25px 'Myriad Pro',Arial,Helvetica,sans-serif;
		}

		div#acceso p{
			font: bold 15px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			color: rgba(0, 255, 106, 1);;
		}
		div#acceso h1{
			color: white;
			font: bold 45px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 11px blue;
		}
		
		
		div#acceso{
			width:840px;
			border-radius:100px 25px 100px 25px;
			text-align:center;
			margin:70px auto;
			height:450px;
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
		
		.salir p{
			text-align: left;
		}
		img#inicio{
			width: 50px;
			height: 50px;
			margin: 0px 0px 0px 20px;
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

	</STYLE>
	<HEAD>
	   <TITLE>Acceso Profesores</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
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
				<H1>ACCESO PROFESOR</H1>
			</div>
			<div id="form">
			
				<FORM CLASS="borde" ACTION="index.php" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
					<P><INPUT TYPE="text" maxlength="15" NAME="usu"  placeholder="Usuario" required title="Inserte el Usuario"></P>
					<P><INPUT TYPE="password" maxlength="15" NAME="pass" placeholder="Password" required title="Inserte la contraseña"></P>
					<P><INPUT TYPE="submit" NAME="aceptar" VALUE=""></P>
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
				$usu = $_POST['usu'];
				$pass= $_POST['pass']; 
				
				$query= "select * from PROFESORES where USU = '$usu'" or die ("Problemas en el select". mysqli_error($conexion));	
				$cons=mysqli_query($conexion,$query);	
			    $fila=mysqli_fetch_array($cons);
				$cantidad = mysqli_affected_rows($conexion);
				mysqli_close($conexion);	
		
				$_SESSION["var_sesion"] = $fila['IDPROF']; 
				
				if (($cantidad==1) && ($pass == $fila['PASS'])){
					Header("Location: menu_profe.php");
				}
				else { 
					echo '<script type="text/javascript">
							alert("Datos de acceso incorrectos");
						</script>';
						
				}				
			}
		?>			
		
	</BODY>
	
</html>