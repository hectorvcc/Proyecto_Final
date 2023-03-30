<?php 
			session_start(); 
			$sesion = $_SESSION["var_sesion"];
		?>
<HTML LANG="es">

<style>
		img.foto{
		width:100px;
		height: 150px;
 		display: block;
		margin:5px auto;
		margin: 4% auto;
		background-color: rgba(255,255,255,.4); 
		padding:10px;
		border-radius:40%;
		transition:box-shadow .4s;
				
	}
	div#menu ul li{
		margin-top:20px;
		
		font: bold 18px 'Comic Sans MS',Arial,Helvetica,sans-serif;
		text-decoration:none;
		background-color:lightskyblue;
		width:250px;
		padding-top:10px;
		padding-bottom:10px;
		border-radius:0px 20px 20px 0px;
		padding-left:20px;
		-moz-box-shadow: 17px 9px 41px #ffd6ec;
-webkit-box-shadow: 17px 6px 41px #ffd6ec;
		-webkit-transition:padding-left 0.6s;
		color:white;
	}
a:link   
{   
 text-decoration:none;   
}  
	div#menu ul li:hover{
		padding-left:50px;
		background-color: white;
		color: lightskyblue;
		-moz-box-shadow: 17px 9px 41px skyblue;
		-webkit-box-shadow: 17px 6px 41px skyblue;
		font: bold 21px 'Comic Sans MS',Arial,Helvetica,sans-serif;
	}
	div#menu{
		width:27px;
		float:left;
		margin-top:20px;
	}
	
	div#pagina{
		margin: 4% auto;
		width:100%;
	}
	div#principal{
		width:100%;
		margin: 100px 0px 0px 100px;
	}
	.h1{
			color: white;
			font: bold 55px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 11px skyblue;
			text-align:center;
		}
	
	
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
	img.foto{
				width: 175px;
				height: 300px;
				display: block;
				background-color: rgba(255,255,255,0.4); 
				padding:3px;
				border-radius:40%;
				transition:box-shadow .4s;
			margin-left: 75px;
		}
	
	
		.tabla{
			margin: 30px 10px 10px 44px;
		}
		
		table {
			width: 70%;
			border-spacing: 3px;
			background-color: rgba(255,255,255,0);
			color: #fff;
			text-align: center;
			font: bold 15px Comic Sans MS,Arial,Helvetica,sans-serif;
		}
		td {
		   background-color: rgba(255,255,255,.5);
		   padding: 8px 8px 8px 8px;
		   color: green;
		   border-right: 44px;
		   border-left: 44px;
		   text-shadow: 4px 4px 8px white;
		}
		th{
			padding: 8px 8px 8px 8px;
			background-color: rgba(255,255,133,0.9);
			font: bold 18px Comic Sans MS,Arial,Helvetica,sans-serif;
			color: blue;
		}
		
		img#estado{
			width:25px;
			height: 25px;
		}	

	
	
	
	
		</style>

	<HEAD>
	   <TITLE>PROFESOR - Listado de EMPRESAS</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>
<?php
			
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from CURRICULUM where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
			mysqli_close($conexion);
		?>
	<BODY>
		<div id="menu" class="div">
						<div class="ima">
							<img class="foto"  src="<?php echo $fila['FOTO'];?>">
						</div>
						<div class="ul">
							<ul>
								<a href="modi_curr.php"><li>Modificar Curriculum</li></a>
								<a href="ver_ofertas.php"><li>Ver Ofertas de Empleo</li></a>
								<a href="ver_empresas.php"><li>Ver Empresas</li></a>
								<a href="baja.php"><li>Darme de baja</li></a>
								<a href="acceso_alumno.php"><li>Salir</li></a>
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
					<h1 class="h1">LISTADO DE EMPRESAS</h1>
					<div class="tabla">	
								
							<?PHP
								
								$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								$query= "select * from EMPRESA" or die ("Problemas en el select". mysqli_error($conexion));	
								$cons=mysqli_query($conexion,$query);	
								
								$nfilas = mysqli_num_rows ($cons);
							  if ($nfilas > 0)
							  {
								 print ("<p align=\"center\"><TABLE  rules=\"rows\" >\n");
								 print ("<TR>\n");
								 print ("<TH>NOMBRE</TH>\n");
								 print ("<TH>Nombre Contacto</TH>\n");
								 print ("<TH>Mail Contacto</TH>\n");
								 print ("<TH>Teléfono Contacto</TH>\n");
								 print ("<TH>WEB</TH>\n");
								 print ("</TR>\n");

								 for ($i=0; $i<$nfilas; $i++)
								 {
									$fila=mysqli_fetch_array($cons);
									print ("<TR>\n");
									print ("<TD>" . $fila['NOMBRE'] . "</TD>\n");
									print ("<TD>" . $fila['NOM_REP'] . "</TD>\n");
									print ("<TD>" . $fila['MAIL_REP'] . "</TD>\n");
									print ("<TD>" . $fila['TEL_REP'] . "</TD>\n");
									print ("<TD><a href=\"http://".$fila['WEB']."\"  target=\"_blank\">".$fila['WEB']."</TD>\n");
									print ("</TR>\n");
								 }

								 print ("</TABLE></p>\n");
							  }
							  else
								 print ("<P class=\"pp\">No hay EMPRESAS dadas de alta</p>");

								 mysqli_close ($conexion);

						?>
					</div>
				</div>
			</div>
	</BODY>

</HTML>