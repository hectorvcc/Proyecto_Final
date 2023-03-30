<HTML LANG="es">

	<style>

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
		
	}
	.h1{
			color: white;
			font: bold 55px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 11px skyblue;
			text-align:center;
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
	
	
	div#principal{
	 margin: 20px 110px 0px 0px;
			width:70%;
			float: right;
			
		}
		
		.tabla{
			margin: 30px 10px 10px 44px;
		}
		
		table {
		border-radius: 50%;
		   border-collapse: separate;
		   border-spacing: 5px;
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
			width:25px;
			height: 25px;
		}
	</style>

	<HEAD>
	   <TITLE>ALUMNOS - Ofertas de Empleo</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>
<?php 
			session_start(); 
			
			$sesion = $_SESSION["var_sesion"]; 
			
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from curriculum where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
			mysqli_close($conexion);
	?>
	<BODY>
	<div id="menu" class="div" >
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
				
				<header id="header">
					<div class="titulo">
							<img class="sim" style="float:left;" src="/Proyecto/ies.gif">
							<h1>IES ENRIQUE TIERNO GALVÁN</h1>
							<p>BOLSA DE EMPLEO</p>
					</div>
				</header>
		
				
				<div id="principal" >
					<h1 class="h1"><?php echo $fila['NOMBRE']." ".$fila['APE']; ?></h1>	
					
					<div class="tabla">	
			
					<?PHP
		
							
								$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								$query= "select * from OFERTA where ESTADO=1" or die ("Problemas en el select". mysqli_error($conexion));	
								$cons=mysqli_query($conexion,$query);	
								
						  $nfilas = mysqli_num_rows ($cons);
						  if ($nfilas > 0)
						  {
						  	
						  
							 print ("<TABLE class=\"t1\">\n");
							 print ("<TR >\n");
							 print ("<TH >EMPRESA</TH>\n");
							 print ("<TH >DESCRIPCIÓN</TH>\n");
							  print ("<TH>HORARIO</TH>\n");
							 print ("<TH >PUESTO</TH>\n");
							 print ("<TH >VACANTES</TH>\n");
							 print ("<TH >¿APUNTADO?</TH>\n");
							 
							 print ("</TR>\n");

							 for ($i=0; $i<$nfilas; $i++)
							 {
								$fila=mysqli_fetch_array($cons);

								$sesion = $_SESSION["var_sesion"]; 
								
								$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								$query= "select * from INSCRITOS WHERE IDOFERTA = ".$fila['ID']." AND DNI='".$sesion."' AND CIF = '".$fila['CIF']."'"
								or die ("Problemas en el select". mysqli_error($conexion));	
								
								$emp= "select NOMBRE from EMPRESA WHERE CIF = '".$fila['CIF']."'" or die ("Problemas en el select". mysqli_error($conexion));	
								$consultaemp=mysqli_query($conexion,$emp);	
								$filaemp=mysqli_fetch_array($consultaemp);
								
								$consulta=mysqli_query($conexion,$query);	
								$num = mysqli_num_rows ($consulta);							

								if($num>0){print ("<TR style=\"background: green\">\n");}else{print ("<TR style=\"background: grey \">\n");}
									print ("<TD>" . $filaemp['NOMBRE'] . "</TD>\n");
									print ("<TD>" . $fila['DESCRIP'] . "</TD>\n");
									print ("<TD>" . $fila['HORARIO'] . "</TD>\n");
									print ("<TD>" . $fila['PUESTO'] . "</TD>\n");
									print ("<TD>" . $fila['VACANTES'] . "</TD>\n");
								if($num==0){
									print ("<TD><a href=\"ins_oferta.php?id=".$fila['ID']."&dni=".$sesion."&cif=".$fila['CIF']."\"> <img id=\"estado\" src=\"/Proyecto/botones/cruz.gif\"> </a></TD><tr>\n");
								} else {
									print ("<TD><a href=\"borrar_ins.php?id=".$fila['ID']."&dni=".$sesion."&cif=".$fila['CIF']."\"><img id=\"estado\" src=\"/Proyecto/botones/tick.gif\"> </a></TD></tr>\n");
								}
								
							 }

							 print ("</TABLE>\n");
						  }
						  else
							 print ("No hay ofertas disponibles");


					   mysqli_close ($conexion);
					   
					   ?>

					</div>	
			</div>
		</div>
	</div>
	
	</BODY>
	
</HTML>