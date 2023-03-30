<HTML LANG="es">
	<HEAD>
	   <TITLE>EMPRESA - Cambio de clave de acceso</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>	
	<style>
		.error{
			padding: 1%;
			text-align: center;
			color: red;
			font: bold 21px Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 7px white;
		}
		
		.aviso{
			padding: 1%;
			text-align: center;
			color: green;
			font: bold 22px Comic Sans MS,Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 7px white;
		}	
		input[type=submit]{
			border-style: none;
			border-color: inherit;

			background: url('/Proyecto/botones/accept-2.gif') no-repeat 0 0;
			cursor: pointer;
			width: 50px;
			height: 50px;
			text-align: center;
		}	
		
	div#acceso{
			width: 600px;
			border-radius: 200px 99px 200px 99px;
			text-align:center;
			margin: 3px auto;
			height: auto;			
			padding: 1%;
			background: rgba(255, 255, 255, 0.3);
		}
	</style>


	<BODY>
		<?php 
			session_start(); 
			
			$sesion = $_SESSION["var_sesion"]; 

		
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from EMPRESA where CIF= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
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
					<h1 class="h1">CAMBIO DE CLAVE DE ACCESO - <?php echo $fila['NOMBRE'];?></h1>
						<div id="acceso">
							<P class="pt">Modifique los datos:</P>
							<form name="prueba" action="cambio.php" method="POST">
								<p align="center">
									<table class="tabla" width="500">
										<tr >
											<td><p class="p">Clave Actual: </p></td><td><p class="p"><INPUT TYPE="password" maxlength="10" NAME="clave" placeholder="Clave Actual" required title="Clave Actual"></p></td>
										</tr>
										<tr>
											<td><p class="p">Nueva Clave: </p></td><td><p class="p"><INPUT TYPE="password" maxlength="10" NAME="claveNueva" placeholder="Nueva Clave" required title="Nueva Clave"></p></td><!-- pattern="([0-9]{8}([A-Z]|[a-z]))|(([X|Y|Z]|[x|y|z])[0-9]{7}([A-Z]|[a-z]))" title="DNI:12345678X o NIE: [XYZ]1234567X" --> 
										</tr>
										<tr>								
											<td colspan="2"><p align="center"><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p></td>
										</tr>
									<tr>
											<?php	
											
											if (isset($_POST['aceptar']))
											{

											$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
											$query= "select * from EMPRESA where CIF= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
											$cons=mysqli_query($conexion,$query);		
											$fila=mysqli_fetch_array($cons);
											mysqli_close($conexion);
											$clave_bd=$fila['CLAVE'];
												
												if ($clave_bd==$_POST['clave'])
												{
											$claveNueva = $_POST['claveNueva'];
													$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
													$query= "UPDATE EMPRESA SET CLAVE= '$claveNueva' WHERE CIF= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
													$cons=mysqli_query($conexion,$query);
													mysqli_close($conexion);	
														
													echo '<td colspan="2"><P class="aviso">LA CLAVE HA SIDO MODIFICADA</P></td>';
												}
												else{
													echo '<td colspan="2"><p class="error">LA CLAVE NO ES CORRECTA</p></td>';
												}
											}
											
											?>
										</tr>
									</table>	
								</p>
						</div>
					</form> 
				</div>
		</div> 
</HTML>
