<HTML LANG="es">

	<style>
	

	
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
		   color: orangered;
		   border-right: 44px;
		   border-left: 44px;
		}
		th{
			padding: 8px 8px 8px 8px;
			background-color: PaleTurquoise;
			font: bold 18px Comic Sans MS,Arial,Helvetica,sans-serif;
			color: blue;
		}

	.imag{
			width: 65px;
			height: 65px;
		}
		img#estado{
			width: 40px;
			height: 40px;
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
					
					<h1 class="h1">ALUMNOS INSCRITOS EN LA OFERTA</h1>
						<div class="tabla"><p align="center">
										<?PHP
											$id=$_REQUEST['id'];
											
											
											$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
									$query= "select * from OFERTA where ID='$id'" or die ("Problemas en el select". mysqli_error($conexion));	
									$cons=mysqli_query($conexion,$query);	
											
								   
									  $nfilas = mysqli_num_rows ($cons);
									  
										 print ("<TABLE bgcolor='white' rules=\"rows\">\n");
										 print ("<TR>\n");
										 print ("<TH >PUESTO</TH>\n");
										 print ("<TH >VACANTES</TH>\n");
										 print ("<TH >ESTUDIOS</TH>\n");
										 print ("<TH >DESCRIPCION</TH>\n");
										 print ("</TR>\n");

										 for ($i=0; $i<$nfilas; $i++)
										 {
											$fila=mysqli_fetch_array($cons);
											
											
												print ("<TR bgcolor='white'>\n");
											
											print ("<TD>" . $fila['PUESTO'] . "</TD>\n");
											print ("<TD>" . $fila['VACANTES'] . "</TD>\n");
											print ("<TD>" . $fila['ESTUDIOS'] . "</TD>\n");
											print ("<TD>" . $fila['DESCRIP'] . "</TD>\n");
											
											print ("</TR>\n"); 
											
										 }

										 print ("</TABLE><br><br>\n");
											
											mysqli_close ($conexion);
										
											
											
											$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
											$query= "select * from ALUMNOS WHERE DNI IN (SELECT DNI FROM INSCRITOS WHERE IDOFERTA=$id)" or die ("Problemas en el select". mysqli_error($conexion));	
											$cons=mysqli_query($conexion,$query);
											
										  $nfilas = mysqli_num_rows ($cons);
										  if ($nfilas > 0)
										  {
											 print ("<TABLE rules=\"rows\">\n");
											 print ("<TR>\n");
											 print ("<TH>NOMBRE</TH>\n");
											 print ("<TH>DNI</TH>\n");
											 print ("<TH>CURRICULUM</TH>\n");
											 print ("<TH>LLAMADO</TH>\n");
											 print ("<TH>ENTREVISTADO</TH>\n");
											 print ("<TH>CONTRATADO</TH>\n");
											 print ("</TR>\n");

											 for ($i=0; $i<$nfilas; $i++)
											 {
												$fila=mysqli_fetch_array($cons);
												print ("<TR>\n");
												print ("<TD>" . $fila['NOMBRE'] . "</TD>\n");
												print ("<TD>" . $fila['DNI'] . "</TD>\n");
												
												$conex=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
											$select= "select * from PROCESO WHERE DNI = '".$fila['DNI']."' AND IDOFERTA = $id" or die ("Problemas en el select". mysqli_error($conex));	
											$con=mysqli_query($conex,$select);
											$res=mysqli_fetch_array($con);
											mysqli_close ($conex);
												
												print ("<td><a href=\"ver_curriculum.php?id=".$res['IDOFERTA']."&dni=".$fila['DNI']."\"><img id=\"estado\" src=\"/Proyecto/botones/inscripcion.gif\"></a></td>");
												print ("<td><a href=\"proceso_alu.php?id=".$res['IDOFERTA']."&dni=".$fila['DNI']."&est=".$res['LLAMADA']."&n=1\">");
														if($res['LLAMADA']==0){
													print ("<img id=\"estado\" src=\"/Proyecto/botones/no.gif\">");
												}else {
													print ("<img id=\"estado\" src=\"/Proyecto/botones/yes.gif\">");
												}
													print ("</a></td>");
												
												print ("<td><a href=\"proceso_alu.php?id=".$res['IDOFERTA']."&dni=".$fila['DNI']."&est=".$res['ENTREVISTA']."&n=2\">");
													if($res['ENTREVISTA']==0){
													print ("<img id=\"estado\" src=\"/Proyecto/botones/no.gif\">");
												}else {
													print ("<img id=\"estado\" src=\"/Proyecto/botones/yes.gif\">");
												}
													print ("</a></td>");
												print ("<td><a href=\"proceso_alu.php?id=".$res['IDOFERTA']."&dni=".$fila['DNI']."&est=".$res['CONTRATO']."&n=3\">");
													if($res['CONTRATO']==0){
													print ("<img id=\"estado\" src=\"/Proyecto/botones/no.gif\">");
												}else {
													print ("<img id=\"estado\" src=\"/Proyecto/botones/yes.gif\">");
												}
													print ("</a></td>");
												print ("</TR>\n");
											 }

											 print ("</TABLE>\n");
										  }
										  else
											 print ("No hay ALUMNOS INSCRITOS EN ESTA OFERTA");

											 mysqli_close ($conexion);

									?>
									<P class="pp"><a href="ofertas_emp.php"><img class="imag" src="/Proyecto/botones/volver-2.gif"></a></p>
							</p>
							
						</div>
				</div>
		</div>


	</BODY>

</HTML>