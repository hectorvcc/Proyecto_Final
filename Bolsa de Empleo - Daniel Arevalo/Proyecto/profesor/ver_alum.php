<HTML LANG="es">

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
			div#menu ul li{
				margin-top:20px;
				
				font: bold 18px 'Comic Sans MS',Arial,Helvetica,sans-serif;
				text-decoration:none;
				background-color: lightcyan;
				width:250px;
				padding-top:10px;
				padding-bottom:10px;
				border-radius:0px 20px 20px 0px;
				padding-left:20px;
				-moz-box-shadow: 17px 6px 41px cyan;
		-webkit-box-shadow: 7px 3px 34px lightcyan;
				-webkit-transition:padding-left 0.6s;
				color:	DodgerBlue;
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
					color: white;
					font: bold 55px 'Comic Sans MS',Arial,Helvetica,sans-serif;
					text-shadow:6px 4px 11px blue;
					text-align:center;
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
				padding: 2%;
				text-align: left;
				color: purple;
				font: bold 21px Comic Sans MS,Arial,Helvetica,sans-serif;
			}
			.pp{
				text-align: center;
				color: purple;
				font: bold 28px Comic Sans MS,Arial,Helvetica,sans-serif;
			}
		
		.tabla{
			margin: 30px 10px 10px 44px;
		}
		
		table {
			width: 50%;
			border-collapse: separate;
			border-spacing: 1px;
			background-color: rgba(255,255,255,0);
			color: #fff;
			text-align: center;
			font: bold 15px Comic Sans MS,Arial,Helvetica,sans-serif;
		}
		td {
		   background-color: rgba(255,255,255,.5);
		   padding: 8px 8px 8px 8px;
		   color: orangered;
		   border-right: 44px;
		   border-left: 44px;
		}
		th{
			padding: 8px 8px 8px 8px;
			background-color: rgba(255,255,0,0.2);
			font: bold 18px Comic Sans MS,Arial,Helvetica,sans-serif;
			color: blue;
		}
		
		img#estado{
			width:25px;
			height: 25px;
		}	
		.pp{
		text-align: center;
		color: purple;
		font: bold 30px Comic Sans MS,Arial,Helvetica,sans-serif;
	}	
		</style>

	<HEAD>
	   <TITLE>PROFESOR - Listado de Alumnos</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>

	<BODY>
			<?php
				session_start(); 
				$sesion = $_SESSION["var_sesion"];
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
					<h1 class="h1">MIS ALUMNOS</h1>
					<div class="tabla">	
					<?php
						$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
						$query= "select * from ALUMNOS where IDPROF = $sesion" or die ("Problemas en el select". mysqli_error($conexion));	
						$cons=mysqli_query($conexion,$query);	
							
						$nfilas = mysqli_num_rows ($cons);
						if ($nfilas > 0)
						{
							 print ("<p align=\"center\"><TABLE rules=\"rows\" border=\"0\">\n");
							 print ("<TR>\n");
							 print ("<TH>NOMBRE</TH>\n");
							 print ("<TH>DNI</TH>\n");
							 print ("<TH>EXPEDIENTE</TH>\n");
							 print ("<TH></TH>\n");
							 print ("<TH></TH>\n");
							 print ("</TR>\n");

							 for ($i=0; $i<$nfilas; $i++)
							 {
								$fila=mysqli_fetch_array($cons);
								print ("<TR>\n");
								print ("<TD>" . $fila['NOMBRE'] . "</TD>\n");
								print ("<TD>" . $fila['DNI'] . "</TD>\n");
								print ("<TD>" . $fila['EXP'] . "</TD>\n");
								print "<td class=\"vacia\"><a href=\"modif_alum.php?id=".$fila['DNI']."\"> <img id=\"estado\" src=\"/Proyecto/botones/inscripcion-2.gif\"> </a></td>
										<td class=\"vacia\"><a href=\"baja_alum.php?id=".$fila['DNI']."\"> <img id=\"estado\" src=\"/Proyecto/botones/darse-de-baja.gif\"></a></td>";
								print ("</TR>\n");
							 }
							 print ("</TABLE></p>\n");
						}
						else
							print ("<P class=\"pp\">No hay ALUMNOS dados de alta</p>");
						mysqli_close ($conexion);
					?>
					</div	>
				</div>
			</div>
	</BODY>

</HTML>