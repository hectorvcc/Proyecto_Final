<?php session_start(); ?>
<html>
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
			width:AUTO;
			float:left;
			margin-top:20px;
		}
		
		div#pagina{
			margin: 4% auto;
			width:100%;
		}
		div#principal{
			width:70%;
			margin: 50px 0px 55px 440px;
		}
		.h1{
				color: white;
				font: bold 55px 'Comic Sans MS',Arial,Helvetica,sans-serif;
				text-shadow:6px 4px 11px skyblue;
				text-align:center;
				margin: 1%;
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
			
			#container {
			  margin: 0px 80px 0px 0px;
			  float:right;
			  width: 75%;
			}
			input#option-1 {
			  display: none;
			  
			}input#option-2 {
			  display: none;
			}input#option-3 {
			  display: none;
			}input#option-4 {
			  display: none;
			}
			#accordion label {
			  background: lightgrey;
			  border-radius: .25em;
			  cursor: pointer;
			  display: block;
			  margin-bottom: .125em;
			  padding: .25em 1em;
			  z-index: 20;
			  font: bold 18px Comic Sans MS, sans-serif;
			  color: BLACK;
			}
			#accordion label:hover {
			  background: powderblue;
			  color: white;
			}
			#accordion input:checked + label {
			  background: springgreen;
			  border-bottom-right-radius: 0;
			  border-bottom-left-radius: 0;
			  color: white;
			  margin-bottom: 0;
			}
			#accordion article {
			  background: #f7f7f7;
			  height:0px;
			  overflow:hidden;
			  z-index:10;
			}
			#accordion article p {
			  padding: 1em;
			}
			#accordion input:checked ~ article {
			 border-bottom-left-radius: .25em;
			 border-bottom-right-radius: .25em;
			 height: auto;
			 margin-bottom: .125em;
			}
			
			.p{
				text-align: left;
				color: red;
				font: bold 15px Comic Sans MS,Arial,Helvetica,sans-serif;
			}
						
			input[type=text], input[type=password], input[type=email], input[type=date], select, .prov {
					margin: 2px;
					padding: 0 3px;
					width: 200px;
					height: 25px;
					color: salmon;
					background: white;
					border: 55px;
					font-size: 16px;
					border-radius: 6px;
					
					-moz-outline-radius: 8px;
					-webkit-box-shadow: inset 4px 4px 4px rgba(33, 77, 233, 0.5);
					
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
					text-align: center;
					margin: 15px 5px 5px 5px;
					padding: 15px 5px 5px 5px;
				}
				.volver{
					border-style: none;
					border-color: inherit;
					border-width: 0;
					background: url('/Proyecto/botones/volver.gif') no-repeat 0 0;
					cursor: pointer;
					width: 142px;
					height: 50px;
					text-align: center;
					margin: 15px 5px 5px 5px;
					padding: 15px 5px 5px 5px;
				}
				input.corto{
					width: 155px;
					margin: 0px 0px 0px 0px;
					padding: 0px 0px 0px 0px;
				}
				input.corto7{
					width: 98px;
					margin: 0px 0px 0px 0px;
					padding: 0px 0px 0px 0px;
				}
				input.corto1{
					width: 145px;
				}
				input.corto2{
					width: 100px;
				}
				table#t3{
					margin: 0px 0px 0px 0px;
					padding: 0px 0px 0px 0px;
					width: 220px;
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
		</style>
		
		<head>
			<title>ALUMNOS - Modificar Curriculum</title>
			<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		</head>
		<body>
		<?php 
			
			$sesion = $_SESSION["var_sesion"]; 
			
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from curriculum where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
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
				<h1 class="h1">CURÍCULUM VITAE</h1>	
					<h1 class="h1"><?php echo $fila['NOMBRE']." ".$fila['APE']; ?></h1>	
					<?php
					$sesion = $_SESSION["var_sesion"];
								
						$fecha = date('Y-m-j');
					$nuevafecha = strtotime ( '-16 year' , strtotime ($fecha));
					$nuevafecha=date ('Y-m-j' ,$nuevafecha);
						
						$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
						$query= "select * from curriculum where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
						$cons=mysqli_query($conexion,$query);	
						$fila=mysqli_fetch_array($cons);
						mysqli_close($conexion);
						$obser = $fila['OBSER'];
						?>

					<FORM CLASS="borde" ACTION="modi_curr2.php?dni=<?php echo $sesion; ?>" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
					
				<section id="accordion">
				  <div>
					<input type="radio" name="accordion-group" id="option-1" />
					<label for="option-1">Datos personales</label>
					<article>
					<p class="ooo" align="center">
					<table class="tabla" >
					<tr >
						<td><p class="p">Nombre:</p></td><td ><p class="p"><INPUT TYPE="text" maxlength="25" NAME="nombre" required title="Inserte el Nombre" placeholder="Nombre" value="<?php echo $fila['NOMBRE']; ?>"></p></td>
						<td><p class="p">Apellidos:</p></td ><td><p class="p"><INPUT TYPE="text" maxlength="35" NAME="ape"  placeholder="Apellidos" value="<?php echo $fila['APE']; ?>"></p></td>
					</tr>	
					<tr >
						<td><p class="p">Fecha de Nacimiento:</p></td><td colspan="3"><p class="p"><INPUT TYPE="date" required title="Inserte la fecha de Nacimiento" max="<?php echo $nuevafecha?>"  NAME="nac" value="<?php echo $fila['FEC_NAC']; ?>"></p></td>
					</tr>
					<tr>
						<td><p class="p">Dirección:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="50" NAME="dir" value="<?php echo $fila['DIREC']; ?>" placeholder="Dirección"></p></td>
						<td><p class="p">Localidad:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="30" NAME="loc" value="<?php echo $fila['LOC']; ?>"  placeholder="Localidad"></p></td>
					</tr>
					<tr>
						<td><p class="p">Código Postal:</p></td><td><p class="p"><INPUT id="cp" TYPE="text" maxlength="5" NAME="cp" value="<?php echo $fila['CP']; ?>" placeholder="Código Postal"></p></td>
						<td><p class="p">Provincia:</p></td>
						<td><p class="p"><input class="prov" list="prov" name="prov" value="<?php echo $fila['PROV'] ?>" placeholder="Provincia" value="<?php echo $fila['PROV']; ?>" >
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
							</datalist>
						</p>
						</td>
					</tr>
					</tr>
					<tr>
						<td><p class="p">Sexo:
							<?php

								$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								$query= "select * from curriculum where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
								$cons=mysqli_query($conexion,$query);	
								$fila=mysqli_fetch_array($cons);
										
								if ( strcasecmp($fila['SEXO'], "hombre") == 0){ 
									echo '</td><td colspan="3"><p class="p"><input type="radio" name="sex" value="hombre" checked="checked">Hombre  
											<input type="radio" name="sex" value="mujer">Mujer</p></td>';
								} else {
								echo '</td><td colspan="3"><p class="p"><input type="radio" name="sex" value="hombre">Hombre  
									<input type="radio" name="sex" value="mujer" checked="checked" >Mujer</p></td>';
								}
											
							 ?>
											
											
					</tr>				
					<tr>
						<td><p class="p">Teléfono:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="11" value="<?php echo $fila['TEL']; ?>" NAME="tel" placeholder="Teléfono Fijo"></p></td>
						<td><p class="p">Móvil:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="9" NAME="mov" value="<?php echo $fila['MOV']; ?>" placeholder="Teléfono Móvil"></p></td>
					</tr>
					<tr>	
						<td><p class="p">Email:</p></td><td><p class="p"><INPUT TYPE="email" NAME="mail"  maxlength="50" required value="<?php echo $fila['MAIL']; ?>" placeholder="example@domain.com"></p></td>
					</tr>					
					<tr>
						<td><p class="p">Carnet de conducir:</p></td>
							
							<?php
			
								$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								
								$query2= "select * from curriculum where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
								$cons2=mysqli_query($conexion,$query2);	
								$fila2=mysqli_fetch_array($cons2);
								$carnet = $fila2['CARNE'];
								echo '<td><p class="p"><select name="permiso" >'; 
								
								$query= "select tipo from permiso" or die ("Problemas en el select". mysqli_error($conexion));	
								$cons=mysqli_query($conexion,$query);		
								while ($fila=mysqli_fetch_array($cons))
								{
									 if ( strcmp($carnet, $fila['tipo']) == 0 ){print ("<option value=\"".$fila['tipo']."\" selected>".$fila['tipo']."</option>");}
									 else{print ("<option value=\"".$fila['tipo']."\">".$fila['tipo']."</option>");}			
								}
								mysqli_close($conexion);	
						
							?>
							</select></p>
						</td>
						<td><p class="p">Vehículo:</p></td><td><p class="p"><input id="radioPermiso" type="radio" name="coche" value="si">Sí
										<input id="radioPermiso" type="radio" name="coche" value="no" checked="checked">No</p></td>
					
					</tr>
					</table>	
					</p>
					</article>
					
				  </div>
					<?php
						$conex=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
						$queryest= "select * from CESTUDIOS where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conex));	
						$queryidi= "select * from CIDIOMA where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conex));	
						$consEst=mysqli_query($conex,$queryest);	
						$consIdi=mysqli_query($conex,$queryidi);	
						
						$nEst=mysqli_num_rows($consEst);
						$nIdi=mysqli_num_rows($consIdi);
												
						$array_est=mysqli_fetch_all($consEst);
						$array_idi=mysqli_fetch_all($consIdi);						
						
					?>
				  <div>
					<input type="radio" name="accordion-group" id="option-2" />
					<label for="option-2">Datos académicos - Formación</label>
					<article>
					
					<p>
					<table>	
						<tr>
							<td><p class="p">TÍTULO:</p></td><td><p class="p"><INPUT class="corto1" value="<?php echo $array_est["0"]["5"]; ?>" required title="Inserte el Título" TYPE="text" maxlength="50" NAME="titulo"  placeholder="Título"></p></td>
								<td><p class="p">NIVEL:</p></td>
									<?php
										$est=$array_est["0"]["2"];
										$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
										$query= "select estudio from estudio" or die ("Problemas en el select". mysqli_error($conexion));	
										$cons=mysqli_query($conexion,$query);	
																			
										echo "<td><p class=\"p\"><select name=\"nivelest\" >";
										
										while ($fila=mysqli_fetch_array($cons))
										{
										print ("<option value=\"".$fila['estudio']."\">".$fila['estudio']."</option>");	
											 if (strcmp($est, $fila['estudio']) == 0 ){print ("<option value=\"".$fila['estudio']."\" selected>".$fila['estudio']."</option>");}
													
										}
										mysqli_close($conexion);	
										
									?>
									</select>
								</p></td>
								<td><p class="p">INICIO:</p></td><td><p class="p"><INPUT TYPE="date" value="<?php echo $array_est["0"]["3"]; ?>"  class="corto" maxlength="8" NAME="inicio"  placeholder="Fecha Inicio"></p></td>
								<td><p class="p">FIN:</p></td><td><p class="p"><INPUT TYPE="date" value="<?php echo $array_est["0"]["4"]; ?>"  class="corto" maxlength="8" NAME="fin"  placeholder="Fecha Fin"></p></td>
						</tr>

					<?php
						if($nEst>1){
					?>
						<tr>
							<td><p class="p">TÍTULO:</p></td><td><p class="p"><INPUT class="corto1"  value="<?php echo $array_est["1"]["5"]; ?>" TYPE="text" maxlength="50" NAME="titulo2"  placeholder="Título"></p></td>
							<td>  <p class="p">NIVEL:</p>
									<?php
										$est=$array_est["1"]["2"];
										$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
										$query= "select estudio from estudio" or die ("Problemas en el select". mysqli_error($conexion));	
										$cons=mysqli_query($conexion,$query);	
																			
										echo "<td><p class=\"p\"><select name=\"nivelest2\" >";
										
										while ($fila=mysqli_fetch_array($cons))
										{
											 if (strcmp($est, $fila['estudio']) == 0 ){print ("<option value=\"".$fila['estudio']."\" selected>".$fila['estudio']."</option>");}
											 print ("<option value=\"".$fila['estudio']."\">".$fila['estudio']."</option>");	
										}
										mysqli_close($conexion);	
										
									?></select>
								</p></td>
								<td><p class="p">INICIO:</p></td><td><p class="p"><INPUT class="corto" value="<?php echo $array_est["1"]["3"]; ?>"   TYPE="date" maxlength="8" NAME="inicio2"  placeholder="Fecha Inicio"></p></td>
								<td><p class="p">FIN:</p></td><td><p class="p"><INPUT class="corto" value="<?php echo $array_est["1"]["4"]; ?>"   TYPE="date" maxlength="8" NAME="fin2"  placeholder="Fecha Fin"></p></td>
						</tr>
						
					<?php
						}
						if($nEst>2){
					?>	
						<tr>						

							<td><p class="p">TÍTULO:</p></td><td><p class="p"><INPUT class="corto1" TYPE="text" maxlength="50" value="<?php echo $array_est["2"]["5"]; ?>"  NAME="titulo3"  placeholder="Título"></p></td>
									  <td><p class="p">NIVEL:</p></td>
										<?php
										$est=$array_est["2"]["2"];
										$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
										$query= "select estudio from estudio" or die ("Problemas en el select". mysqli_error($conexion));	
										$cons=mysqli_query($conexion,$query);	
																			
										echo "<td><p class=\"p\"><select name=\"nivelest3\" >";
										
										while ($fila=mysqli_fetch_array($cons))
										{
											 if (strcmp($est, $fila['estudio']) == 0 ){print ("<option value=\"".$fila['estudio']."\" selected>".$fila['estudio']."</option>");}
											 else{print ("<option value=\"".$fila['estudio']."\">".$fila['estudio']."</option>");}			
										}
										mysqli_close($conexion);	
										
									?></select></p></td>
									  <td><p class="p">INICIO:</p></td><td><p class="p"><INPUT class="corto" value="<?php echo $array_est["2"]["3"]; ?>"  TYPE="date" NAME="inicio3"  placeholder="Fecha Inicio"></p></td>
									  <td><p class="p">FIN:</p></td><td><p class="p"><INPUT class="corto" value="<?php echo $array_est["2"]["4"]; ?>"  TYPE="date"  NAME="fin3"  placeholder="Fecha Fin"></p></td>
							  
						</tr>
					</table>	
					</p>
				<?php
					}
					
				?>
					<p>
					<table>	
						<tr>
							<td><p class="p">IDIOMA:</p></td><td><p class="p"><select name="idioma" >
									<option value="Ingles" <?PHP if(strcmp($array_idi["0"]["2"], "Ingles") == 0 ){ echo "selected";} ?>>Inglés</option>
									<option value="Frances" <?PHP if(strcmp($array_idi["0"]["2"], "Frances") == 0 ){ echo "selected";} ?>>Francés</option>
									<option value="Aleman" <?PHP if(strcmp($array_idi["0"]["2"], "Aleman") == 0 ){ echo "selected";} ?>>Alemán</option>
								</select>
							</p></td>
							<td><p class="p">NIVEL:</p></td><td><p class="p"><select name="nivel" >
									<option value="Bajo" <?PHP if(strcmp($array_idi["0"]["3"], "Bajo") == 0 ){ echo "selected";} ?>>Bajo</option>
									<option value="Medio" <?PHP if(strcmp($array_idi["0"]["3"], "Medio") == 0 ){ echo "selected";} ?>>Medio</option>
									<option value="Alto" <?PHP if(strcmp($array_idi["0"]["3"], "Alto") == 0 ){ echo "selected";} ?>>Alto</option>
									</select>
								</p>
							</td>
					  </tr>
					  <?php
					  
						if($nIdi>1){
					?>
							<td><p class="p">IDIOMA:</p></td><td><p class="p"><select name="idioma2" >
									<option value="Ingles" <?PHP if(strcmp($array_idi["1"]["2"], "Ingles") == 0 ){ echo "selected";} ?>>Inglés</option>
									<option value="Frances" <?PHP if(strcmp($array_idi["1"]["2"], "Frances") == 0 ){ echo "selected";} ?>>Francés</option>
									<option value="Aleman" <?PHP if(strcmp($array_idi["1"]["2"], "Aleman") == 0 ){ echo "selected";} ?>>Alemán</option>
								</select>
							</p></td>
							<td><p class="p">NIVEL:</p></td><td><p class="p"><select name="nivel2" >
									<option value="Bajo" <?PHP if(strcmp($array_idi["1"]["3"], "Bajo") == 0 ){ echo "selected";} ?>>Bajo</option>
									<option value="Medio" <?PHP if(strcmp($array_idi["1"]["3"], "Medio") == 0 ){ echo "selected";} ?>>Medio</option>
									<option value="Alto" <?PHP if(strcmp($array_idi["1"]["3"], "Alto") == 0 ){ echo "selected";} ?>>Alto</option>
									</select>
								</p>
							</td>
					<?php
						}
					?>
					</table>	
					</p>
					
					</article>
				  </div>
				  <?php
						$conex=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
						$queryexp= "select * from CEXPERIENCIA where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conex));	
						
						$consExp=mysqli_query($conex,$queryexp);					
						$nExp=mysqli_num_rows($consExp);						
						$array_exp=mysqli_fetch_all($consExp);
						
					?>
				  
				  <div>
					<input type="radio" name="accordion-group" id="option-3" />
					<label for="option-3">Experiencia Laboral</label>
					<article>
						<p>
						<table id="t3">	
							<tr>
							
									<td><p class="p">Empresa:</p></td><td><p class="p"><INPUT class="corto7" TYPE="text" <?php if($nExp>0){	echo "value=\"".$array_exp["0"]["2"]."\""; } ?> maxlength="25" NAME="empresa"  placeholder="Empresa"></p></td>
									<td> <p class="p">Sector:</p></td><td><p class="p"><select class="corto" name="sector">
											<?php
											$sec=$array_exp["0"]["3"];
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select sector from sector" or die ("Problemas en el select". mysqli_error($conexion));	
												
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													if($nExp>0){ if (strcmp($sec, $fila['sector']) == 0 ){ print ("<option value=\"".$fila['sector']."\" selected>".$fila['sector']."</option>"); } }
													else{ print ("<option value=\"".$fila['sector']."\">".$fila['sector']."</option>"); }
												}
												mysqli_close($conexion);	
											?>
											</select></p></td>
									  <td><p class="p">Inicio:</p></td><td><p class="p"><INPUT class="corto2" <?php if($nExp>0){echo "value=\"".$array_exp["0"]["4"]."\""; }?> TYPE="date" maxlength="25" NAME="inicioex"  placeholder="Inicio"></p></td>
									  <td><p class="p">Fin:</p></td><td><p class="p"><INPUT class="corto2"  <?php if($nExp>0){	echo "value=\"".$array_exp["0"]["5"]."\""; } ?> TYPE="date" maxlength="25" NAME="finex"  placeholder="Fin"></p></td>
									  <td><p class="p">Puesto:</p></td><td><p class="p"><select class="corto2" name="puesto">
											<?php
											$pue=$array_exp["0"]["6"];
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select puesto from puesto" or die ("Problemas en el select". mysqli_error($conexion));	
												
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													if($nExp>0){ if (strcmp($pue, $fila['puesto']) == 0 ){print ("<option value=\"".$fila['puesto']."\" selected>".$fila['puesto']."</option>");}}
													else{print ("<option class=\"corto2\" value=\"".$fila['puesto']."\">".$fila['puesto']."</option>");}
													
												}
												mysqli_close($conexion);	
											?>
											</select>
								</p></td>
							</tr>
					
							<tr>
																											
									<td><p class="p">Empresa:</p></td><td><p class="p"><INPUT class="corto7" <?php if($nExp>1){	echo "value=\"".$array_exp["1"]["2"]."\""; } ?> TYPE="text" maxlength="25" NAME="empresa2"  placeholder="Empresa"></p></td>
									<td> <p class="p">Sector:</p></td><td><p class="p"><select name="sector2">
											<?php
											$sec=$array_exp["1"]["3"];
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select sector from sector" or die ("Problemas en el select". mysqli_error($conexion));	
												
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													if (strcmp($sec, $fila['sector']) == 0 ){print ("<option value=\"".$fila['sector']."\" selected>".$fila['sector']."</option>");}
													else{print ("<option value=\"".$fila['sector']."\">".$fila['sector']."</option>");}
												}
												mysqli_close($conexion);	
											?>
											</select></p></td>
									  <td><p class="p">Inicio:</p></td><td><p class="p"><INPUT TYPE="date"  class="corto2" <?php if($nExp>1){	echo "value=\"".$array_exp["1"]["4"]."\""; } ?> maxlength="25" NAME="inicioex2"  placeholder="Inicio"></p></td>
									  <td><p class="p">Fin:</p></td><td><p class="p"><INPUT TYPE="date" maxlength="25" <?php if($nExp>1){	echo "value=\"".$array_exp["1"]["5"]."\""; } ?> class="corto2" NAME="finex2"  placeholder="Fin"></p></td>
									  <td><p class="p">Puesto:</p></td><td><p class="p"><select name="puesto2" class="corto2"></p>
											<?php
											$pue=$array_exp["1"]["6"];
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select puesto from puesto" or die ("Problemas en el select". mysqli_error($conexion));	
												
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													if (strcmp($pue, $fila['puesto']) == 0 ){print ("<option value=\"".$fila['puesto']."\" selected>".$fila['puesto']."</option>");}
													else{print ("<option class=\"corto2\" value=\"".$fila['puesto']."\">".$fila['puesto']."</option>");}
													
												}
												mysqli_close($conexion);	
											?>
											</select>
								</p>	  </td>
							</tr>
				
							<tr>
								<p>
									  <td><p class="p">Empresa:</p></td><td><p class="p"><INPUT class="corto7" <?php if($nExp>2){ echo "value=\"".$array_exp["2"]["2"]."\""; } ?> TYPE="text" maxlength="25" NAME="empresa3"  placeholder="Empresa"></p></td>
									  <td><p class="p">Sector:</p></td><td><p class="p"><select name="sector3" >
											<?php
											$sec=$array_exp["2"]["3"];
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select sector from sector" or die ("Problemas en el select". mysqli_error($conexion));	
												
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													if (strcmp($sec, $fila['sector']) == 0 ){print ("<option value=\"".$fila['sector']."\" selected>".$fila['sector']."</option>");}
													else{print ("<option value=\"".$fila['sector']."\">".$fila['sector']."</option>");}
												}
												mysqli_close($conexion);	
											?>
											</select></p></td>
									  <td><p class="p">Inicio:</p></td><td><p class="p"><INPUT TYPE="date"  <?php if($nExp>2){	echo "value=\"".$array_exp["2"]["4"]."\""; } ?>  class="corto2" maxlength="25" NAME="inicioex3"  placeholder="Inicio"></p></td>
									 <td> <p class="p">Fin:</p></td><td><p class="p"><INPUT TYPE="date" <?php if($nExp>2){	echo "value=\"".$array_exp["2"]["5"]."\""; } ?>  maxlength="25"  class="corto2" NAME="finex3"  placeholder="Fin"></p></td>
									 <td> <p class="p">Puesto:</p></td><td><p class="p"><select name="puesto3" class="corto2"></p>
											<?php
											$pue=$array_exp["2"]["6"];
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select puesto from puesto" or die ("Problemas en el select". mysqli_error($conexion));	
												
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													if (strcmp($pue, $fila['puesto']) == 0 ){print ("<option value=\"".$fila['puesto']."\" selected>".$fila['puesto']."</option>");}
													else{print ("<option class=\"corto2\" value=\"".$fila['puesto']."\">".$fila['puesto']."</option>");}
													
												}
												mysqli_close($conexion);	
											?>
											</select>
									</p></td>
								
							</tr>	
						</table>	
						</p>
					</article>
				  </div>
				  <div>
					<input type="radio" name="accordion-group" id="option-4" />
					<label for="option-4">Otros Datos</label>
					<article>
						<p>
						<table>	
							<tr>
								<td><p class="p">Foto:</p></td><td><p class="p"><input type="file" name="foto"  title="Inserte una Foto"></p><td>
							<tr>	
							</tr>	
								<td><p class="p">Observaciones:</p></td><td><p class="p"><textarea name="obser" maxlength="300" cols="80" placeholder="Indique otros datos de interés..." rows="7"><?php echo $obser; ?></textarea></p><td>
							</tr>	
						</table>	
						</p>
						
					</article>
				  </div>
				  
				</section>
				
			  
					<p><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p>

				  </form>
				
			</div>
		</div>
	</div>

		</body>
</html>