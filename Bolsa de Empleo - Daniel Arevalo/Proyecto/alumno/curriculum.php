<html>
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
		
		img.volver{
			width:50px;
			height: 50px;
			
					
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
			
			
			#container{
				margin: 100px 100px 100px 100px;
				
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
				
				input.corto{
					width: 92px;
					margin: 0px 0px 0px 0px;
					padding: 0px 0px 0px 0px;
				}
				input.corto1{
					width: 145px;
				}
				.t{
					text-align: right;
				}
		</style>
		
		<head>
			<title>Menú principal</title>
			<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		</head>
		<body>
			<?php
			
			session_start(); 
			$sesion = $_SESSION["var_sesion"];

			$fecha = date('Y-m-j');
			$nuevafecha = strtotime ( '-18 year' , strtotime ( $fecha ) ) ;
			$nuevafecha = date ( 'Y-m-d' , $nuevafecha );
				//echo $nuevafecha;
				
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from ALUMNOS where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
			mysqli_close($conexion);
			?>

			<div id="todo">
			
				<div id="head">
				<header id="header">
					<div class="titulo">

							<img class="sim" style="float:left;" src="/Proyecto/ies.gif">
							<h1>IES ENRIQUE TIERNO GALVÁN</h1>
						
						<p>BOLSA DE EMPLEO</p>
					</div>
				</header>
				</div>
				
					
			<div id="container" class="div">
					<header>
					  <h1 class="h1"><?php echo $fila['NOMBRE'] ?></h1>
					  <H1 class="h1">CURRÍCULUM VITAE</H1>
					</header>
			<FORM CLASS="borde" ACTION="alta_curr.php" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
					
				<section id="accordion">
				  <div >
					<input type="radio" name="accordion-group" id="option-1" />
					<label for="option-1">Datos personales</label>
					<article>
					<p align="center">
					<table class="tabla" >
					<tr >
						<td><p class="p">Nombre:</p></td><td ><p class="p"><INPUT TYPE="text" maxlength="25" NAME="nombre" title="Inserte el Nombre" required placeholder="Nombre" value="<?php echo $fila['NOMBRE']; ?>"></p></td>
						<td><p class="p">Apellidos:</p></td ><td><p class="p"><INPUT TYPE="text" maxlength="35" NAME="ape"  placeholder="Apellidos"></p></td>
					</tr>	
					<tr >
						<td><p class="p">Fecha de Nacimiento:</p></td><td colspan="3"><p class="p"><INPUT TYPE="date" title="Inserte la fecha de Nacimiento" required max="<?php echo $nuevafecha?>"  NAME="nac"></p></td>
					</tr>
					<tr>
						<td><p class="p">Dirección:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="50" NAME="dir" placeholder="Dirección"></p></td>
						<td><p class="p">Localidad:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="30" NAME="loc"   placeholder="Localidad"></p></td>
					</tr>
					<tr>
						<td><p class="p">Código Postal:</p></td><td><p class="p"><INPUT id="cp" TYPE="text" maxlength="5" NAME="cp"   placeholder="Código Postal"></p></td>
						<td><p class="p">Provincia:</p></td>
						<td><p class="p"><input class="prov" list="prov" name="prov" placeholder="Provincia" >
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
						<td><p class="p">Sexo: </p></td><td colspan="3"><p class="p"><input type="radio" name="sex" value="hombre" checked="checked">Hombre   
											<input type="radio" name="sex" value="mujer">Mujer</p></td>
					</tr>				
					<tr>
						<td><p class="p">Teléfono:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="11" NAME="tel" placeholder="Teléfono Fijo"></p></td>
						<td><p class="p">Móvil:</p></td><td><p class="p"><INPUT TYPE="text" maxlength="9" NAME="mov"   placeholder="Teléfono Móvil"></p></td>
					</tr>
					<tr>	
						<td><p class="p">Email:</p></td><td><p class="p"><INPUT TYPE="email" NAME="mail" required maxlength="50" placeholder="example@domain.com"></p></td>
					</tr>					
					<tr>
						<td><p class="p">Carnet de conducir:</p></td>
							<td><p class="p"><select name="permiso" >
							<?php
								$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
								$query= "select tipo from permiso" or die ("Problemas en el select". mysqli_error($conexion));	
								$cons=mysqli_query($conexion,$query);		
								while ($fila=mysqli_fetch_array($cons))
								{
									print ("<option value=\"".$fila['tipo']."\">".$fila['tipo']."</option>");
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
				  <div>
					<input type="radio" name="accordion-group" id="option-2" />
					<label for="option-2">Datos académicos - Formación</label>
					<article>
					
					<p>
					<table>	
						<tr>
							<td><p class="p">TÍTULO:</p></td><td><p class="p"><INPUT class="corto1" TYPE="text" maxlength="50" NAME="titulo" title="Inserte el Título" required placeholder="Título"></p></td>
								<td><p class="p">NIVEL:</p></td><td><p class="p"><select name="nivelest" >
									<?php
										$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
										$query= "select estudio from estudio" or die ("Problemas en el select". mysqli_error($conexion));	
										$cons=mysqli_query($conexion,$query);		
										while ($fila=mysqli_fetch_array($cons))
										{
											print ("<option value=\"".$fila['estudio']."\">".$fila['estudio']."</option>");
										}
										mysqli_close($conexion);	
									?>
									</select>
								</p></td>
								<td><p class="p">INICIO:</p></td><td><p class="p"><INPUT TYPE="date" class="corto" maxlength="8" NAME="inicio"  placeholder="Fecha Inicio"></p></td>
								<td><p class="p">FIN:</p></td><td><p class="p"><INPUT TYPE="date" class="corto" maxlength="8" NAME="fin"  placeholder="Fecha Fin"></p></td>
						</tr>
						<tr>
							<td><p class="p">TÍTULO:</p></td><td><p class="p"><INPUT class="corto1" TYPE="text" maxlength="50" NAME="titulo2" title="Inserte el Título" placeholder="Título"></p></td>
							<td>  <p class="p">NIVEL:</p></td><td><p class="p"><select name="nivelest2" >
									<?php
										$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
										$query= "select estudio from estudio" or die ("Problemas en el select". mysqli_error($conexion));	
										$cons=mysqli_query($conexion,$query);		
										while ($fila=mysqli_fetch_array($cons))
										{
											print ("<option value=\"".$fila['estudio']."\">".$fila['estudio']."</option>");
										}
										mysqli_close($conexion);	
									?></select>
								</p></td>
								<td><p class="p">INICIO:</p></td><td><p class="p"><INPUT class="corto" TYPE="date" maxlength="8" NAME="inicio2"  placeholder="Fecha Inicio"></p></td>
								<td><p class="p">FIN:</p></td><td><p class="p"><INPUT class="corto"  TYPE="date" maxlength="8" NAME="fin2"  placeholder="Fecha Fin"></p></td>
						</tr>
						<tr>						

							<td><p class="p">TÍTULO:</p></td><td><p class="p"><INPUT class="corto1" TYPE="text" maxlength="50" NAME="titulo3" placeholder="Título"></p></td>
									  <td><p class="p">NIVEL:</p></td><td><p class="p"><select name="nivelest3" >
										<?php
											$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
											$query= "select estudio from estudio" or die ("Problemas en el select". mysqli_error($conexion));	
											$cons=mysqli_query($conexion,$query);		
											while ($fila=mysqli_fetch_array($cons))
											{
												print ("<option value=\"".$fila['estudio']."\">".$fila['estudio']."</option>");
											}
											mysqli_close($conexion);	
										?></select></p></td>
									  <td><p class="p">INICIO:</p></td><td><p class="p"><INPUT class="corto" TYPE="date" maxlength="8" NAME="inicio3"  placeholder="Fecha Inicio"></p></td>
									  <td><p class="p">FIN:</p></td><td><p class="p"><INPUT class="corto" TYPE="date" maxlength="8" NAME="fin3"  placeholder="Fecha Fin"></p></td>
							  
						</tr>
					</table>	
					</p>
					
					<p>
					<table>	
						<tr>
							<td><p class="p">IDIOMA:</p></td><td><p class="p"><select name="idioma" >
									<option value="ingles">Inglés</option>
									<option value="ingles">Francés</option>
									<option value="ingles">Alemán</option>
								</select>
							</p></td>
							<td><p class="p">NIVEL:</p></td><td><p class="p"><select name="nivel" >
									<option value="ingles">Bajo</option>
									<option value="ingles">Medio</option>
									<option value="ingles">Alto</option>
									</select>
								</p>
							</td>
					  </tr>
							<td><p class="p">IDIOMA:</p></td><td><p class="p"><select name="idioma2" >
									<option value=""></option>
									<option value="ingles">Inglés</option>
									<option value="ingles">Francés</option>
									<option value="ingles">Alemán</option>
								</select></p></td>
							<td><p class="p">NIVEL:</p></td><td><p class="p"><select name="nivel2" >
									<option value=""></option>
									<option value="ingles">Bajo</option>
									<option value="ingles">Medio</option>
									<option value="ingles">Alto</option>
								</select>
							</p></td>
						
					</table>	
					</p>
					
					</article>
				  </div>
				  <div>
					<input type="radio" name="accordion-group" id="option-3" />
					<label for="option-3">Experiencia Laboral</label>
					<article>
						<p>
						<table>	
							<tr>
								
									<td><p class="p">Empresa:</p></td><td><p class="p"><INPUT class="corto" TYPE="text" maxlength="25" NAME="empresa"  title="Inserte la Empresa" placeholder="Empresa"></p></td>
									<td> <p class="p">Sector:</p></td><td><p class="p"><select class="corto" name="sector">
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
											</select></p></td>
									  <td><p class="p">Inicio:</p></td><td><p class="p"><INPUT class="corto" TYPE="date" maxlength="25" NAME="inicioex"  placeholder="Inicio"></p></td>
									  <td><p class="p">Fin:</p></td><td><p class="p"><INPUT class="corto" TYPE="date" maxlength="25" NAME="finex"  placeholder="Fin"></p></td>
									  <td><p class="p">Puesto:</p></td><td><p class="p"><select class="corto" name="puesto">
											<?php
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select puesto from puesto" or die ("Problemas en el select". mysqli_error($conexion));	
												
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													print ("<option  class=\"corto\" value=\"".$fila['puesto']."\">".$fila['puesto']."</option>");
												}
												mysqli_close($conexion);	
											?>
											</select>
								</p></td>
							</tr>
							<tr>
								
									<td><p class="p">Empresa:</p></td><td><p class="p"><INPUT class="corto" TYPE="text" maxlength="25" NAME="empresa2" title="Inserte la Empresa" placeholder="Empresa"></p></td>
									<td> <p class="p">Sector:</p></td><td><p class="p"><select name="sector2">
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
											</select></p></td>
									  <td><p class="p">Inicio:</p></td><td><p class="p"><INPUT TYPE="date"  class="corto" maxlength="25" NAME="inicioex2"  placeholder="Inicio"></p></td>
									  <td><p class="p">Fin:</p></td><td><p class="p"><INPUT TYPE="date" maxlength="25" class="corto" NAME="finex2"  placeholder="Fin"></p></td>
									  <td><p class="p">Puesto:</p></td><td><p class="p"><select name="puesto2"></p>
											<?php
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select puesto from puesto" or die ("Problemas en el select". mysqli_error($conexion));	
												
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													print ("<option value=\"".$fila['puesto']."\">".$fila['puesto']."</option>");
												}
												mysqli_close($conexion);	
											?>
											</select>
								</p>	  </td>
							</tr>
							<tr>
								<p>
									  <td><p class="p">Empresa:</p></td><td><p class="p"><INPUT class="corto" TYPE="text" maxlength="25" NAME="empresa3" placeholder="Empresa"></p></td>
									  <td><p class="p">Sector:</p></td><td><p class="p"><select name="sector3">
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
											</select></p></td>
									  <td><p class="p">Inicio:</p></td><td><p class="p"><INPUT TYPE="date"  class="corto" maxlength="25" NAME="inicioex3"  placeholder="Inicio"></p></td>
									 <td> <p class="p">Fin:</p></td><td><p class="p"><INPUT TYPE="date" maxlength="25"  class="corto" NAME="finex3"  placeholder="Fin"></p></td>
									 <td> <p class="p">Puesto:</p></td><td><p class="p"><select name="puesto3"></p>
											<?php
												$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
												$query= "select puesto from puesto" or die ("Problemas en el select". mysqli_error($conexion));	
												
												$cons=mysqli_query($conexion,$query);		
												while ($fila=mysqli_fetch_array($cons))
												{
													print ("<option value=\"".$fila['puesto']."\">".$fila['puesto']."</option>");
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
								<td><p class="p">Foto:</p></td><td><p class="p"><input type="file" name="foto" required></p><td>
							<tr>	
							</tr>	
								<td><p class="p">Observaciones:</p></td><td><p class="p"><textarea name="obser" maxlength="300" cols="80" placeholder="Indique otros datos de interés..." rows="7"></textarea></p><td>
							</tr>	
						</table>	
						</p>
						
					</article>
				  </div>
				  
				</section>
				</div>
				<p align="center">
					<table>
						<tr>
							<td width="222"><p><a href="acceso_alumno.php"><img class="volver" src="/Proyecto/botones/volver-2.gif"></a></p></td>
							<td><p><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p></td>
						</tr>
					</table>
				</p>
				  </form>
				  
				  
						
						
				</div>
				
			</div>
			  
		</body>
</html>