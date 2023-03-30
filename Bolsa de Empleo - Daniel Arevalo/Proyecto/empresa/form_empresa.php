<HTML LANG="es">
<?php $n=$_REQUEST['n']; ?>
	<HEAD>
	   <TITLE>EMPRESA - Alta Empresa</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>
	<style>
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
		.p2{
		padding: 1%;
		text-align: center;
		color: LightGoldenrodYellow;
		font: bold 21px Comic Sans MS,Arial,Helvetica,sans-serif;
		text-shadow:6px 4px 11px blue;
	}
	.p1{
		padding: 1%;
		text-align: center;
		color: darkblue;
		font: bold 21px Comic Sans MS,Arial,Helvetica,sans-serif;
		text-shadow:6px 4px 11px aquamarine;
	}
	
	.pp{
		text-align: center;
		color: purple;
		font: bold 28px Comic Sans MS,Arial,Helvetica,sans-serif;
		text-shadow:6px 4px 11px white;
	}
	.b{
		width: 50px;
		height: 50px;
	}
	.sel1{
			margin: 5px;
			padding: 0 10px;
			width: 450px;
			height: 30px;
			color: Blue;
			background: white;
			border: 100px;
			font-size: 20px;
			border-radius: 18px;
			
			-moz-outline-radius: 8px;
			-webkit-box-shadow: inset 5px 5px 22px rgba(11, 88, 255, 0.7);
			
	}
	
	<?php if($n==2){
		session_start(); 
		$sesion = $_SESSION["var_sesion"];	?>
		html{
			font-family: Geneva, sans-serif;
			background-color: powderblue;
		}
		
	<?php	} ?>
	</style>


<BODY >

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
					<h1 class="h1">ALTA EMPRESA</h1>
					<div id="acceso">
					<P class="pp">Introduzca los Datos de la empresa:</P>
					

								<?php
									if($n==1){
										echo '<FORM CLASS="borde" ACTION="form_empresa.php?n=1" METHOD="POST" autocomplete="on" enctype="multipart/form-data">';
									} else if($n==2){
										echo '<FORM CLASS="borde" ACTION="form_empresa.php?n=2" METHOD="POST" autocomplete="on" enctype="multipart/form-data">';
									}
								?>
								<p align="center">
								<table class="tabla" width="888">
									<tr>
										<td colspan=""><p class="p2">Nombre:</td></p><td ><p class="p"><INPUT TYPE="text" maxlength="25" NAME="nombre" required title="Nombre de Empresa" placeholder="Nombre Empresa" ></td></p>
										<td colspan=""><p class="p2">CIF:</td></p><td ><p class="p"><INPUT TYPE="text" maxlength="9" NAME="cif" required pattern="(([A-X]|[a-x])[0-9]{7}([A-Z]|[a-z]|[0-9]))" title="Formato CIF Incorrecto (Sin guiones)" placeholder="CIF Empresa" ></td></p>
									</tr>
									<tr>
										<td><p class="p2">Dirección:</td></p><td><p class="p"><INPUT TYPE="text" maxlength="25" NAME="dir" placeholder="Dirección"></td></p>
										<td><p class="p2">Localidad:</td></p><td><p class="p"><INPUT TYPE="text" maxlength="25" NAME="loc"   placeholder="Localidad" ></td></p>
									</tr>
										
									<tr>
										<td><p class="p2">Código Postal:</td></p><td><p class="p"><INPUT TYPE="text" maxlength="5" NAME="cp" placeholder="Código Postal"></td></p>
										<td><p class="p2">Provincia:</td></p><td><p class="p">
											<input list="prov" name="prov" placeholder="Provincia" class="sel" >
											<datalist id="prov">
											<?php
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select nombre from provincia" or die ("Problemas en el select". mysqli_error($conexion));	
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													print ("<option value=\"".$fila['nombre']."\">".$fila['nombre']."</option>");
												}
												mysqli_close($conexion);	
											?>
											</datalist></td></p>
									</tr>
									<tr>
										<td colspan="1"><p class="p2">Sector:</td></p><td colspan="3"><p class="p">
											<select name="sector" placeholder="Sector" class="sel1">
													<?php
															$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
														$query= "select sector from sector" or die ("Problemas en el select". mysqli_error($conexion));	
														
														$cons=mysqli_query($conexion,$query);		
														while ($fila=mysqli_fetch_array($cons))
														{
															print ("<option value=\"".$fila['sector']."\">".$fila['sector']."</option>");
														}
														mysqli_close($conexion);	
													?>
											</select></td></p>
									</tr>
									<tr>
										<td colspan="2"><p class="p2" >Teléfono:</td></p><td colspan="2"><p class="p"><INPUT TYPE="text" maxlength="11" NAME="tel" placeholder="Teléfono"></td></p>
									</tr>
									<tr>
										<td colspan="2"><p class="p2" >Clave de acceso:</td></p><td colspan="2"><p class="p"><INPUT TYPE="password" maxlength="11" NAME="pass" placeholder="Clave de acceso" required title="Clave de acceso al sistema" ></td></p>
									</tr>
									<tr>
										<td colspan="2"><p class="p2" >Logotipo de empresa:</td></p><td colspan="2"><p class="p"><INPUT TYPE="file" maxlength="11" NAME="foto" ></td></p>
									</tr>
									<tr>	
													<table width="888">
														<tr >
															<td colspan="4"><p class="p1">Datos de contacto:</td></p>
														</tr>
														<tr>
														
															<td><p class="p1">Nombre Contacto:</td></p><td><p class="p1"><INPUT TYPE="text" maxlength="25" NAME="nom_con" required title="Inserte un Contacto" placeholder="Nombre Contacto"></td></p>
															<td><p class="p1">Teléfono Contacto:</td></p><td><p class="p1"><INPUT TYPE="text" maxlength="11" NAME="tel_con" placeholder="Teléfono Contacto" ></td></p>
														</tr>
														<tr>
															<td><p class="p1">Email:</td></p><td><p class="p1"><INPUT TYPE="email" NAME="mail_con"  placeholder="example@domain.com" class="sel" required></td></p>
															<td><p class="p1">Web:</td></p><td><p class="p1"><INPUT TYPE="text" NAME="web"   placeholder="Página Web" required title="Inserte la web"></td></p>
														</tr>
														
														
								<?php
								  if (isset($_POST['aceptar'])){
								  $nom=$_REQUEST['nombre'];
								  $cif=$_REQUEST['cif'];
								  $dir=$_REQUEST['dir'];
								  $loc=$_REQUEST['loc'];
								  $cp=$_REQUEST['cp'];
								  $prov=$_REQUEST['prov'];;
								  $tel=$_REQUEST['tel'];
								  $pass=$_REQUEST['pass'];
								  $sector=$_REQUEST['sector'];;
								  $web=$_REQUEST['web'];
								  $nom_con=$_REQUEST['nom_con'];
								  $tel_con=$_REQUEST['tel_con'];
								  $mail_con=$_REQUEST['mail_con'];  
								  $cif = strtoupper($cif);
								  
								  $conexion=mysqli_connect("localhost","root","","bolsaempleo");
								  $query="SELECT CIF FROM EMPRESA WHERE CIF = '$cif'"  or die ("Error en el select". mysqli_error($conexion));
								  $cons=mysqli_query($conexion,$query);		
								  $vacio=true;
									while ($fila=mysqli_fetch_array($cons))
									{
										$vacio=false;
									}
									
									if ($vacio) {
									
										$nombreDirectorio = "imagenes/";
										$nombreFichero = $_FILES['foto']['name'];
											 
										  // Si ya existe un fichero con el mismo nombre, renombrarlo
											 $nombreCompleto = $nombreDirectorio . $cif;
											
										move_uploaded_file ($_FILES['foto']['tmp_name'], $nombreCompleto);

									  $conexion=mysqli_connect("localhost","root","","bolsaempleo") 
										or die("Problemas en la conexion");

										$query= "insert into empresa (cif, clave, nombre, sector, direc, loc, prov, cp, tel, web, nom_rep, tel_rep, mail_rep, foto)
										values ('$cif','$pass','$nom','$sector','$dir','$loc','$prov','$cp','$tel','$web','$nom_con','$tel_con','$mail_con','$nombreCompleto')"
										or die ("Problemas en el insert". mysqli_error($conexion));
										
										mysqli_query($conexion,$query);
										echo '<script type="text/javascript">
																alert("Su empresa ha sido dada de alta correctamente.");
															</script>';
										
										mysqli_close($conexion);

								//	print "<img src=\"$nombreCompleto\">";
									}
									else{
										echo '<script type="text/javascript">
															alert("El CIF ya está registrado.");
														</script>';
									}

									}

									if($n==1){
										echo '<tr><td colspan="2" class="p1"><a href="/Proyecto/empresa/"><img class="b" src="/Proyecto/botones/volver-2.gif"></a></p></td>';
									} else if($n==2){
										echo '<tr><td colspan="2" class="p1"><a href="/Proyecto/profesor/menu_profe.php"><img class="b" src="/Proyecto/botones/volver-2.gif"></a></p></td>';
									};
								?>		
														
														
															<td colspan="4"><p align="center"><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p></td>
														</tr>
													</table>
											
									</tr>
									</FORM>							
						
									
								</table>
								
							</p>
					</div>
						
				</div>

</BODY>
</HTML>