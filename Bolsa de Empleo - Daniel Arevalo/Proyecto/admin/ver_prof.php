<HTML LANG="es">
<style>
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
		   background-color:LIGHTCYAN;
		   padding: 8px 8px 8px 8px;
		   color: orangered;
		   border-right: 44px;
		   border-left: 44px;
		}
		th{
			padding: 8px 8px 8px 8px;
			background-color: NavajoWhite;
			font: bold 18px Comic Sans MS,Arial,Helvetica,sans-serif;
			color: blue;
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
</style>
	<HEAD>
	   <TITLE>ADMINISTRACIÓN - Listado de Profesores</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>

	<BODY>
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
					<h1 class="h1">LISTADO DE PROFESORES</h1>
					<div class="tabla">	
								<?PHP
									
									$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
									$query= "select * from PROFESORES where IDPROF <> 1" or die ("Problemas en el select". mysqli_error($conexion));	
									$cons=mysqli_query($conexion,$query);	
										
							   
								  $nfilas = mysqli_num_rows ($cons);
								  if ($nfilas > 0)
								  {
									 print ("<p align=\"center\"><TABLE  rules=\"rows\" >\n");
									 print ("<TR>\n");
									 print ("<TH>NOMBRE</TH>\n");
									 print ("<TH>USUARIO</TH>\n");
									 print ("<TH></TH>\n");
									 print ("<TH></TH>\n");
									 print ("</TR>\n");

									 for ($i=0; $i<$nfilas; $i++)
									 {
										$fila=mysqli_fetch_array($cons);
										print ("<TR>\n");
										print ("<TD>" . $fila['NOMBRE'] . "</TD>\n");
										print ("<TD>" . $fila['USU'] . "</TD>\n");
										print "<td><a href=\"modif_prof.php?id=".$fila['IDPROF']."\"> <img id=\"estado\" src=\"/Proyecto/botones/inscripcion-2.gif\"> </a></td>
												<td><a href=\"baja_prof.php?id=".$fila['IDPROF']."\"> <img id=\"estado\" src=\"/Proyecto/botones/darse-de-baja.gif\"> </a></td>";
										print ("</TR>\n");
									 }

									 print ("</TABLE>\n");
								  }
								  else
									 print ("No hay profesores dados de alta");

									 mysqli_close ($conexion);

							?>
							
							</div>
				</div>
			</div>

	</BODY>

</HTML>