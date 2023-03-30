<HTML LANG="es">

<style>
		*{
		margin:0px;
		padding:0px;
		}

		html{
			font-family: Geneva, sans-serif;
			background-color: DarkSlateBlue;
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
			text-shadow:6px 4px 11px lightgreen;
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
			color: DarkSlateBlue;
			background: white;
			border: 55px;
			font-size: 20px;
			border-radius: 12px;
			
			-moz-outline-radius: 8px;
			-webkit-box-shadow: inset 4px 4px 4px rgba(33, 44, 233, 0.5);
			
		}
		input:focus {
			
			outline-offset: 0;
			-webkit-box-shadow: 1px 5px 75px lightgreen;
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
	   <TITLE>Administración - Acceso </TITLE>
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
				<H1>ACCESO ADMINISTRADOR</H1>
			</div>
			<div id="form">
				
				<FORM CLASS="borde" ACTION="index.php" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
					<p><INPUT TYPE="text" maxlength="15" NAME="usu" title="Complete el Usuario" placeholder="Usuario" required></p>
					<p><INPUT TYPE="password" maxlength="15" NAME="pass" title="Complete la contraseña" placeholder="Password" required ></p>
						
					<p class="bot"><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p>
	
				</FORM>
					
			</div>
			<div id="salir" class="salir">
				<div id="izq"><a href="/Proyecto"><img id="inicio" src="/Proyecto/botones/inicio.gif"></a></div>
				<div id=""></div>
			</div>
		</div>
	</div>
	<?php
			if (isset($_POST['aceptar']))
			{
				$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
				$usu = $_POST['usu'];
				$pass= $_POST['pass']; 
				
				$query= "select * from PROFESORES where IDPROF = 1" or die ("Problemas en el select". mysqli_error($conexion));	
				$cons=mysqli_query($conexion,$query);	
			    $fila=mysqli_fetch_array($cons);
				
				if ( ($usu==$fila['USU']) && ($pass == $fila['PASS'])){
					 Header("Location: menu_admin.php"); 
				}
				else{
					echo '<script type="text/javascript">
							alert("Datos de acceso incorrectos");
						</script>';
				}
			}
		?>	
	</BODY>
</HTML>