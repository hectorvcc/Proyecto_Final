<HTML LANG="es">

<style>
		*{
		margin:0px;
		padding:0px;
		}

		html{
			font-family: Geneva, sans-serif;
			background-color:orange;
		}

		header#header{
			margin:30px auto;
			width:840px;
			height:100px;
			
		}
		a:link   
		{   
		 text-decoration:none;   
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

		div#acceso p{
			font: bold 15px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			color: rgba(0, 255, 106, 1);;
		}
		div#acceso h1{
			color: white;
			font: bold 45px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 11px orange;
		}
		
		img.sim{
			margin:20px;
			padding:20px auto;
			background-color: rgba(255,255,255,.6);
			width:25px;
			border-radius:50%;
			
			transition:box-shadow .4s;
		}
		
		div#acceso{
			width:840px;
			border-radius:100px 25px 100px 25px;
			text-align:center;
			margin:70px auto;
			height:488px;
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
			color: orange;
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
		.salir{
			height: 50px;
		}
		img#inicio{
			width: 50px;
			height: 50px;
			margin: 0px 0px 0px 20px;
		}
		
		div#izq{
			float: left;
		}
		div#der{
			float: right;
			margin: 20px 40px 0px 0px;
			color: white;
		}
		.imag{
			width: 40px;
			height: 40px;
		}
		.alta[
			color: white;
		]
	</style>	
	<HEAD>
	   <TITLE>EMPRESA - Acceso </TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
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
				<H1>ACCESO EMPRESAS</H1>
			</div>
			<div id="form">
				
				<FORM CLASS="borde" ACTION="index.php" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
					<p><INPUT TYPE="text" maxlength="9" NAME="cif" required title="Formato CIF Incorrecto (Sin guiones)" placeholder="CIF Empresa"  pattern="(([A-X]|[a-x])[0-9]{7}([A-Z]|[a-z]|[0-9]))"></p>
					<p><INPUT TYPE="password" maxlength="10" NAME="clave" placeholder="Password" required title="Inserte la clave de acceso" ></p>
							
				
					<p class="bot"><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p>
					
					<p class="alta" align="center"><a href="form_empresa.php?n=1"><img id="inicio" src="/Proyecto/botones/inscripcion-3.gif">Darme de alta</a></p>
				</FORM>
					
			</div>
			<div id="salir" class="salir">
				<div id="izq"><a href="/Proyecto"><img id="inicio" src="/Proyecto/botones/inicio.gif"></a></div>
				<div id=""></div>
			</div>
		</div>
	</div>
	<?php
		session_start(); 

		if (isset($_POST['aceptar']))
		{
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$cif = $_POST['cif'];
			$cif = strtoupper($cif);
			$clave= $_POST['clave']; 
			$query= "select * from EMPRESA where CIF= '$cif'" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);
			$cantidad = mysqli_affected_rows($conexion);			
			
			if($cantidad==0){
				echo '<script type="text/javascript">
							alert("Su empresa no está dada de alta.");
						</script>';
						
			} else {
				$fila=mysqli_fetch_array($cons);
				$clave_bd=$fila['CLAVE'];
				
				if ($clave==$clave_bd){
					$_SESSION["var_sesion"] = $cif; 
					 Header("Location: menu_empresa.php"); 
				} else{
			
					echo '<script type="text/javascript">
							alert("La clave de acceso no es correcta");
						</script>';
				}
			}
		}
	?>
	</BODY>
</HTML>