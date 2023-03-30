<HTML LANG="es">

	<style>
	
	.tabla{
			margin: 30px 10px 10px 44px;
		}

		table {
		  
		   border-spacing: 1px;
		  background-color: rgba(255,255,255,0);
		   color: #fff;
		   text-align: center;
		   font: bold 15px Comic Sans MS,Arial,Helvetica,sans-serif;
		}
		td, th {
		   background-color: rgba(255,255,255,.6);
		   
		   padding: 8px 8px 8px 8px;
		}
		th{
		font: bold 25px Comic Sans MS,Arial,Helvetica,sans-serif;
			color: blue;
		}
	img#estado{
			width:50px;
			height: 30px;
		}
	</style>


	<HEAD>
	   <TITLE>EMPRESAS - Ofertas de Empleo</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>

	<BODY>
	<?PHP
		session_start(); 
		$sesion = $_SESSION["var_sesion"]; 
		
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select FOTO from EMPRESA where CIF= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
			mysqli_close($conexion);
	?>

		<div id="menu" class="div" >
			<div class="ima">
				<img class="foto"  src="<?php echo $fila['FOTO'];?>">
			</div>
			<div class="ul">
				<ul>

					<a href="modi_empresa.php"><li>Modificar Datos de Empresa</li></a>
					<a href="form_oferta.php"><li>Publicar oferta de Empleo</li></a>
					<a href="ofertas_emp.php"><li>Gestión de ofertas</li></a>
					<a href="cambio.php"><li>Modificar clave de acceso</li></a>
					<a href="baja_empresa.php"><li>Darse de baja del servicio</li></a>
					<a href="index.php"><li>Salir</li></a>

				</ul>
			</div>
		</div>
	
		<div id="pagina" >
				
				<header id="header">
					<div class="titulo">
							<img class="sim" style="float:left;" src="/Proyecto/ies.gif">
							<h1>IES ENRIQUE TIERNO GALVÁN</h1>
							<p>BOLSA DE EMPLEO</p>
					</div>
				</header>
		
				
				<div id="principal" >
					
					<h1 class="h1">MIS OFERTAS DE EMPLEO</h1>
						<div class="tabla"><p align="center">
								<?PHP
									
									$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
									$query= "select * from OFERTA where CIF='$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
									$cons=mysqli_query($conexion,$query);	
											
								   
									  $nfilas = mysqli_num_rows ($cons);
									  if ($nfilas > 0)
									  {
										 print ("<TABLE rules=\"rows\">\n");
										 print ("<TR>\n");
										 print ("<TH >DESCRIPCIÓN</TH>\n");
										  print ("<TH>HORARIO</TH>\n");
										 print ("<TH >PUESTO</TH>\n");
										 print ("<TH >VACANTES</TH>\n");
										 print ("<TH></TH>\n");
										 print ("<TH></TH>\n");
										 print ("</TR>\n");

										 for ($i=0; $i<$nfilas; $i++)
										 {
											$fila=mysqli_fetch_array($cons);
											$est=$fila['ESTADO'];
											
											if($est==0){
												print ("<TR bgcolor='grey'>\n");
											}else if($est==1){
												print ("<TR bgcolor='green'>\n");
											}
											print ("<TD>" . $fila['DESCRIP'] . "</TD>\n");
									print ("<TD>" . $fila['HORARIO'] . "</TD>\n");
									print ("<TD>" . $fila['PUESTO'] . "</TD>\n");
									print ("<TD>" . $fila['VACANTES'] . "</TD>\n");
											
											if($est==0){
												print ("<TD><a href=\"gestion_oferta.php?id=".$fila['ID']."&est=".$fila['ESTADO']."\"><img id=\"estado\" src=\"/Proyecto/botones/off-2.gif\"></a></TD>\n");
											} else if($est==1){
												print ("<TD><a href=\"gestion_oferta.php?id=".$fila['ID']."&est=".$fila['ESTADO']."\"><img id=\"estado\" src=\"/Proyecto/botones/on-2.gif\"></a></TD>\n");
											}
											
											if($est==1){print ("<TD><a href=\"lista_alu.php?id=".$fila['ID']."\"><img id=\"estado\" src=\"/Proyecto/botones/alumnos.gif\"></a></TD>\n");} else {print ("<TD></TD>\n");}

											print ("</TR>\n"); 
											
										 }

										 print ("</TABLE>\n");
										 
									  }
									  else
										 print ("No hay ofertas disponibles");


								   mysqli_close ($conexion);
								   
								?>
								</p>
						</div>
				</div>
		</div>

	</BODY>
	
</HTML>

