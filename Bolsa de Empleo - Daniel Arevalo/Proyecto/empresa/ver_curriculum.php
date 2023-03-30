<html>

<head>
	<meta content="text/html; charset=UTF-8;" http-equiv="content-type">
	 <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	<title>
		EMPRESA - Ver Currículum
	</title>
</head>
		<style>
			#container {
			  margin: 25px 90px 0px 0px;
			  float:right;
			  width: 90%;
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
			  background: #eee;
			  border-radius: .25em;
			  cursor: pointer;
			  display: block;
			  margin-bottom: .125em;
			  padding: .25em 1em;
			  z-index: 20;
			}
			#accordion label:hover {
			  background: #ccc;
			}
			#accordion input:checked + label {
			  background: #ccc;
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
			.pv{
				text-align: left;
				color: green;
				font: bold 19px Comic Sans MS,Arial,Helvetica,sans-serif;
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
			.imag{
			width: 65px;
			height: 65px;
		}

				input.corto{
					width: 155px;
					margin: 0px 0px 0px 0px;
					padding: 0px 0px 0px 0px;
				}
				input.corto7{
					width: 68px;
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
			
		td{padding: 0px 0px 0px 0px;}
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


	<body>
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
										
					<?php
						
						$dni=$_REQUEST['dni'];
						$id=$_REQUEST['id'];

						
						$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
						$query= "select * from curriculum where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conexion));	
						$cons=mysqli_query($conexion,$query);	
						$fila=mysqli_fetch_array($cons);
						
						$foto = "/Proyecto/alumno/".$fila['FOTO'];
						$obser = $fila['OBSER'];
						mysqli_close($conexion);
					?>
					<h1 class="h11"><?php echo $fila['NOMBRE']." ".$fila['APE']; ?></h1>
			<div id="container" class="div">
				
				<section id="accordion">
				  <div>
					<input type="radio" name="accordion-group" id="option-1" />
					<label for="option-1">Datos personales</label>
					<article>
					<p class="ooo" align="center">
					<table class="tabla" >
					<tr >
						<td><p class="p">Nombre:</p></td><td ><p class="pv"><?php echo $fila['NOMBRE']; ?></p></td>
						<td><p class="p">Apellidos:</p></td ><td><p class="pv"><?php echo $fila['APE']; ?></p></td>
					</tr>	
					<tr >
						<td><p class="p">Fecha de Nacimiento:</p></td><td colspan="3"><p class="pv"><?php echo $fila['FEC_NAC']; ?></p></td>
					</tr>
					<tr>
						<td><p class="p">Dirección:</p></td><td><p class="pv"><?php echo $fila['DIREC']; ?></p></td>
						<td><p class="p">Localidad:</p></td><td><p class="pv"><?php echo $fila['LOC']; ?></p></td>
					</tr>
					<tr>
						<td><p class="p">Código Postal:</p></td><td><p class="pv"><?php echo $fila['CP']; ?></p></td>
						<td><p class="p">Provincia:</p></td>
						<td><p class="pv"><?php echo $fila['PROV']; ?></p>
						</td>
					</tr>
					</tr>
					<tr>
						<td><p class="p">Sexo:</p></td>
							<?php

								$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								$query= "select * from curriculum where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conexion));	
								$cons=mysqli_query($conexion,$query);	
								$fila=mysqli_fetch_array($cons);
								echo "<td><p class=\"pv\">";
								if ( strcasecmp($fila['SEXO'], "hombre") == 0){ 
									echo "Hombre";
								} else {
								echo 'Mujer';
								}
								echo "</p></td>";
							 ?>
											
											
					</tr>				
					<tr>
						<td><p class="p">Teléfono:</p></td><td><p class="pv"><?php echo $fila['TEL']; ?></p></td>
						<td><p class="p">Móvil:</p></td><td><p class="pv"><?php echo $fila['MOV']; ?></p></td>
					</tr>
					<tr>	
						<td><p class="p">Email:</p></td><td><p class="pv"><?php echo $fila['MAIL']; ?></p></td>
					</tr>					
					<tr>
						<td><p class="p">Carnet de conducir:</p></td>
							<td><p class="pv"><?php echo $fila['CARNE'];?>
							</p>
						</td>
						<td><p class="p">Vehículo:</p></td>
						<?php

								$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								$query= "select * from curriculum where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conexion));	
								$cons=mysqli_query($conexion,$query);	
								$fila=mysqli_fetch_array($cons);
								echo "<td><p class=\"pv\">";
								if ( strcasecmp($fila['VEHICULO'], "si") == 0){ 
									echo "Sí";
								} else {
								echo 'No';
								}
								echo "</p></td>";
							 ?></p></td>
					
					</tr>
					</table>	
					</p>
					</article>
					
				  </div>
					<?php
						$conex=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
						$queryest= "select * from CESTUDIOS where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conex));	
						$queryidi= "select * from CIDIOMA where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conex));	
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
					<?php
						if($nEst>0){
					?>
					<p>
					<table>	
						<tr>
							<td><p class="p">TÍTULO:</p></td><td><p class="pv"><?php echo $array_est["0"]["5"]; ?></p></td>
								<td><p class="p">NIVEL:</p></td>
									<?php
										$est=$array_est["0"]["2"];
										echo "<td><p class=\"pv\">".$est."</p></td>";
										
									?>
									</select>
								</p></td>
								<td><p class="p">INICIO:</p></td><td><p class="pv"><?php echo $array_est["0"]["3"]; ?></p></td>
								<td><p class="p">FIN:</p></td><td><p class="pv"><?php echo $array_est["0"]["4"]; ?></p></td>
						</tr>

					<?php
						}if($nEst>1){
					?>
						<tr>
							<td><p class="p">TÍTULO:</p></td><td><p class="pv"><?php echo $array_est["1"]["5"]; ?></p></td>
							<td>  <p class="p">NIVEL:</p>
									<?php
										$est=$array_est["1"]["2"];
										echo "<td><p class=\"pv\">".$est."</p></td>";
										
									?></select>
								</p></td>
								<td><p class="p">INICIO:</p></td><td><p class="pv"><?php echo $array_est["1"]["3"]; ?></p></td>
								<td><p class="p">FIN:</p></td><td><p class="pv"><?php echo $array_est["1"]["4"]; ?></p></td>
						</tr>
						
					<?php
						}
						if($nEst>2){
					?>	
						<tr>						

							<td><p class="p">TÍTULO:</p></td><td><p class="pv"><?php echo $array_est["2"]["5"]; ?></p></td>
									  <td><p class="p">NIVEL:</p></td>
										<?php
										$est=$array_est["2"]["2"];
										echo "<td><p class=\"pv\">".$est."</p></td>";
									?></select></p></td>
									  <td><p class="p">INICIO:</p></td><td><p class="pv"><?php echo $array_est["2"]["3"]; ?></p></td>
									  <td><p class="p">FIN:</p></td><td><p class="pv"><?php echo $array_est["2"]["4"]; ?></p></td>
							  
						</tr>
					</table>	
					</p>
				<?php
					}
						if($nEst>0){
					
				?>
					<p>
					<table>	
						<tr>
							<td><p class="p">IDIOMA:</p></td><td><p class="pv">
							<?PHP echo $array_idi["0"]["2"];?>
								
							</p></td>
							<td><p class="p">NIVEL:</p></td><td><p class="pv">
							<?PHP echo $array_idi["0"]["3"];?>
								
							</p></td>

					  </tr>
					  <?php
					  
						}if($nIdi>1){
					?>
							<td><p class="p">IDIOMA:</p></td><td><p class="pv">
							<?PHP echo $array_idi["1"]["2"];?>
								
							</p></td>
							</p></td>
							<td><p class="p">NIVEL:</p></td><td><p class="pv">
							<?PHP echo $array_idi["1"]["3"];?>
							
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
						$queryexp= "select * from CEXPERIENCIA where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conex));	
						
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
							
									<td><p class="p">Empresa:</p></td><td><p class="pv"><?php if($nExp>0){	echo $array_exp["0"]["2"]; } ?></p></td>
									<td> <p class="p">Sector:</p></td><td><p class="pv">
											<?php
											
												if($nExp>0){ $sec=$array_exp["0"]["3"]; echo $sec; }
												
											?>
											</p></td>
									  <td><p class="p">Inicio:</p></td><td><p class="pv"><?php if($nExp>0){echo $array_exp["0"]["4"]; }?></p></td>
									  <td><p class="p">Fin:</p></td><td><p class="pv"><?php if($nExp>0){echo $array_exp["0"]["5"]; } ?></p></td>
									  <td><p class="p">Puesto:</p></td><td><p class="pv">
											<?php
											
											if($nExp>0){$pue=$array_exp["0"]["6"]; echo $pue;}

											?>
								</p></td>
							</tr>
					
							<tr>
																											
									<td><p class="p">Empresa:</p></td><td><p class="pv"><?php if($nExp>1){echo $array_exp["1"]["2"]; } ?></p></td>
									<td> <p class="p">Sector:</p></td><td><p class="pv">
											<?php
											
													if ($nExp>1){$sec=$array_exp["1"]["3"]; echo $sec;}
												
											?></p></td>
									  <td><p class="p">Inicio:</p></td><td><p class="pv"><?php if($nExp>1){	echo $array_exp["1"]["4"]; } ?></p></td>
									  <td><p class="p">Fin:</p></td><td><p class="pv"><?php if($nExp>1){echo $array_exp["1"]["5"]; } ?> </p></td>
									  <td><p class="p">Puesto:</p></td><td><p class="pv">
											<?php
											
												if($nExp>1){$pue=$array_exp["1"]["6"]; echo $pue;}
												
											?>
								</p>	  </td>
							</tr>
				
							<tr>
								<p>
									  <td><p class="p">Empresa:</p></td><td><p class="pv"> <?php if($nExp>2){ echo $array_exp["2"]["2"]; } ?> </p></td>
									  <td><p class="p">Sector:</p></td><td><p class="pv">
											<?php
											
											if($nExp>2){ $sec= $array_exp["2"]["3"]; echo $sec; }
												
											?>
											</select></p></td>
									  <td><p class="p">Inicio:</p></td><td><p class="pv"><?php if($nExp>2){	echo $array_exp["2"]["4"]; } ?></p></td>
									 <td> <p class="p">Fin:</p></td><td><p class="pv"><?php if($nExp>2){echo $array_exp["2"]["5"]; } ?></p></td>
									 <td> <p class="p">Puesto:</p></td><td><p class="pv">
											<?php
											
												if($nExp>2){$pue=$array_exp["2"]["6"]; echo $pue;}
													
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
						</tr>	
								<td><p align="center"><img class="foto"  src="<?php echo $foto;?>"></p></td>
						</tr>	
						
							</tr>	
								<td><p class="p">Observaciones:</p></td><td><p class="p"><textarea readonly name="obser" maxlength="300" cols="80" placeholder="Indique otros datos de interés..." rows="7"><?php echo $obser; ?></textarea></p><td>
							</tr>	
						</table>	
						</p>
						
					</article>
				  </div>
				  
				</section>
							  
					<P class="pp"><a href="lista_alu.php?id=<?php echo $id;?>&dni=<?php echo $dni; ?>"><img class="imag" src="/Proyecto/botones/volver-2.gif"></a></p>


				
			</div>
			</div>
	</div>
		  
		</body>
	
	
</HTML>