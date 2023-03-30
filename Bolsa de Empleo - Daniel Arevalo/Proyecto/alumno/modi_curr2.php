<?php
	
						$dni=$_REQUEST['dni'];
						if (isset($_POST['aceptar']))
						{
						
								$nom=$_REQUEST['nombre'];
							  $ape=$_REQUEST['ape'];
							  $nac=$_REQUEST['nac'];
							  $dir=$_REQUEST['dir'];
							  $loc=$_REQUEST['loc'];
							  $cp=$_REQUEST['cp'];
							  $prov=$_REQUEST['prov'];
							  $sex=$_REQUEST['sex'];
							  $tel=$_REQUEST['tel'];
							  $mov=$_REQUEST['mov'];
							  $mail=$_REQUEST['mail'];
							  $perm=$_REQUEST['permiso'];
							  $vehic=$_REQUEST['coche'];
							  $obser=$_REQUEST['obser'];
							
							
								$nombreDirectorio = "imagenes/";
								$nombreFichero = $_FILES['foto']['name'];
														
							$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
							if(strcmp($nombreFichero,"")!=0){
	
								$nombreCompleto = $nombreDirectorio . $dni;
								unlink($nombreCompleto);	
								move_uploaded_file ($_FILES['foto']['tmp_name'], $nombreCompleto);
								
								$query= "UPDATE CURRICULUM SET NOMBRE = '$nom', APE = '$ape', FEC_NAC='$nac', SEXO='$sex',DIREC='$dir',LOC='$loc',PROV='$prov',CP='$cp',
							TEL='$tel',MOV='$mov',MAIL='$mail',VEHICULO='$vehic',CARNE='$perm',FOTO='$nombreCompleto', OBSER = '$obser' WHERE DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conexion));
							}
							else {
							$query= "UPDATE CURRICULUM SET NOMBRE = '$nom', APE = '$ape', FEC_NAC='$nac', SEXO='$sex',DIREC='$dir',LOC='$loc',PROV='$prov',CP='$cp',
							TEL='$tel',MOV='$mov',MAIL='$mail',VEHICULO='$vehic',CARNE='$perm', OBSER = '$obser' WHERE DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conexion));
							}
							
							
							$sel= "select * from CESTUDIOS where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conex));	
							$consSel=mysqli_query($conexion,$sel);	
							$array_cest=mysqli_fetch_all($consSel);
					$array=$array_cest["0"]["0"];
					$array1=$array_cest["1"]["0"];
					$array2=$array_cest["2"]["0"];
							$queryEstudio= "UPDATE CESTUDIOS SET ESTUDIO='$_REQUEST[nivelest]', FECINI='$_REQUEST[inicio]', FECFIN='$_REQUEST[fin]', TITULO='$_REQUEST[titulo]' WHERE ID=$array AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
								mysqli_query($conexion,$queryEstudio);
							if(strcmp($_REQUEST['titulo2'],"")!=0){	$E2="UPDATE CESTUDIOS SET ESTUDIO='$_REQUEST[nivelest2]', FECINI='$_REQUEST[inicio2]', FECFIN='$_REQUEST[fin2]', TITULO='$_REQUEST[titulo2]' WHERE ID=$array1 AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
									mysqli_query($conexion,$E2);
									}
							if(strcmp($_REQUEST['titulo3'],"")!=0){	$E3="UPDATE CESTUDIOS SET ESTUDIO='$_REQUEST[nivelest3]', FECINI='$_REQUEST[inicio3]', FECFIN='$_REQUEST[fin3]', TITULO='$_REQUEST[titulo3]' WHERE ID=$array2 AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
								mysqli_query($conexion,$E3);
								}
								
							$sel2= "select * from CIDIOMA where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conexion));	
							$consSel2=mysqli_query($conexion,$sel2);	
							$array_cest2=mysqli_fetch_all($consSel2);
					$a=$array_cest2["0"]["0"]; echo $a." cidioma";
					$a1=$array_cest2["1"]["0"]; echo $a1." cidioma1";
					
							$queryIdioma= "UPDATE CIDIOMA SET IDIOMA='$_REQUEST[idioma]', NIVEL='$_REQUEST[nivel]' WHERE ID=$a AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
							mysqli_query($conexion,$queryIdioma);
								
							if(strcmp($_REQUEST['idioma2'],"")!=0){	$i2="UPDATE CIDIOMA SET IDIOMA='$_REQUEST[idioma2]', NIVEL='$_REQUEST[nivel2]' WHERE ID=$a1 AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
								mysqli_query($conexion,$i2);
							}
							
							
							$sel3= "select * from CEXPERIENCIA where DNI= '$dni'" or die ("Problemas en el select". mysqli_error($conexion));	
							$consSel3=mysqli_query($conexion,$sel3);	
							$array_cest3=mysqli_fetch_all($consSel3);
					$ar=$array_cest3["0"]["0"]; echo $array." cexp";
					$ar1=$array_cest3["1"]["0"]; echo $array." cexp1";
					$ar2=$array_cest3["2"]["0"]; echo $array." cexp2";

						$queryExp= "UPDATE CEXPERIENCIA SET EMPRESA = '$_REQUEST[empresa]', SECTOR='$_REQUEST[sector]', FECINI='$_REQUEST[inicioex]', FECFIN='$_REQUEST[finex]', PUESTO='$_REQUEST[puesto]' WHERE ID=$ar AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
							mysqli_query($conexion,$queryExp);
							echo "update exp1";
							if(strcmp($_REQUEST['empresa2'],"")!=0){ $exp2="UPDATE CEXPERIENCIA SET EMPRESA = '$_REQUEST[empresa2]', SECTOR='$_REQUEST[sector2]', FECINI='$_REQUEST[inicioex2]', FECFIN='$_REQUEST[finex2]', PUESTO='$_REQUEST[puesto2]' WHERE ID=$ar1 AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
								mysqli_query($conexion,$exp2);
							}
							if(strcmp($_REQUEST['empresa3'],"")!=0){ $exp3="UPDATE CEXPERIENCIA SET EMPRESA = '$_REQUEST[empresa3]', SECTOR='$_REQUEST[sector3]', FECINI='$_REQUEST[inicioex3]', FECFIN='$_REQUEST[finex3]', PUESTO='$_REQUEST[puesto3]' WHERE ID=$ar2 AND DNI= '$dni'" or die ("Problemas en el insert". mysqli_error($conexion));
								mysqli_query($conexion,$exp3);
							}
							$cons=mysqli_query($conexion,$query);
							mysqli_close($conexion);	
							Header ("Location: menu_alumno.php");
					}
				?>