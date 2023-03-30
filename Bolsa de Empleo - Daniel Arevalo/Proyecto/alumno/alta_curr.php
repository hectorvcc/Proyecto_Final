<?php

session_start(); 
			$sesion = $_SESSION["var_sesion"];

					  $nom=$_REQUEST['nombre'];
					  $ape=$_REQUEST['ape'];
					  $dni=$sesion;
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
						 
					$nombreCompleto = $nombreDirectorio . $dni;        
					move_uploaded_file ($_FILES['foto']['tmp_name'], $nombreCompleto);
					
				  $conexion=mysqli_connect("localhost","root","","bolsaempleo") 
					or die("Problemas en la conexion");

					$query= "insert into curriculum(dni, nombre, ape, fec_nac, sexo, direc, loc, prov, cp, tel , mov, mail, vehiculo, carne, foto, obser)
					values ('$dni','$nom','$ape','$nac','$sex','$dir','$loc','$prov','$cp','$tel','$mov','$mail','$vehic','$perm','$nombreCompleto', '$obser')"
					or die ("Problemas en el insert". mysqli_error($conexion));
					
					if(strcmp($_REQUEST['titulo'],"")!=0){	
						$queryEstudio= "insert into CESTUDIOS(dni,estudio,fecini,fecfin,titulo) values ('$dni','$_REQUEST[nivelest]','$_REQUEST[inicio]','$_REQUEST[fin]','$_REQUEST[titulo]')" or die ("Problemas en el insert". mysqli_error($conexion));
								mysqli_query($conexion,$queryEstudio);
					}
					if(strcmp($_REQUEST['titulo2'],"")!=0){	$E2="insert into CESTUDIOS(dni,estudio,fecini,fecfin,titulo) values ('$dni','$_REQUEST[nivelest2]','$_REQUEST[inicio2]','$_REQUEST[fin2]','$_REQUEST[titulo2]')" or die ("Problemas en el insert". mysqli_error($conexion));
									mysqli_query($conexion,$E2);
					}
					if(strcmp($_REQUEST['titulo3'],"")!=0){	$E3="insert into CESTUDIOS(dni,estudio,fecini,fecfin,titulo) values ('$dni','$_REQUEST[nivelest3]','$_REQUEST[inicio3]','$_REQUEST[fin3]','$_REQUEST[titulo3]')" or die ("Problemas en el insert". mysqli_error($conexion));
								mysqli_query($conexion,$E3);
					}
					
					
					
					if(strcmp($_REQUEST['idioma'],"")!=0){ $queryIdioma= "insert into CIDIOMA(dni,idioma,nivel) values ('$dni','$_REQUEST[idioma]','$_REQUEST[nivel]')" or die ("Problemas en el insert". mysqli_error($conexion));
							mysqli_query($conexion,$queryIdioma);
					}		
					if(strcmp($_REQUEST['idioma'],"")!=0){	$i2="insert into CIDIOMA(dni,idioma,nivel) values ('$dni','$_REQUEST[idioma2]','$_REQUEST[nivel2]')" or die ("Problemas en el insert". mysqli_error($conexion));
							mysqli_query($conexion,$i2);
					}
					
					
					if(strcmp($_REQUEST['empresa'],"")!=0){$queryExp= "insert into CEXPERIENCIA (dni,empresa,sector,fecini,fecfin,puesto) values 
					('$dni','$_REQUEST[empresa]','$_REQUEST[sector]','$_REQUEST[inicioex]','$_REQUEST[finex]','$_REQUEST[puesto]')" or die ("Problemas en el insert". mysqli_error($conexion));
							mysqli_query($conexion,$queryExp);
							}
					if(strcmp($_REQUEST['empresa2'],"")!=0){ $exp2="insert into CEXPERIENCIA (dni,empresa,sector,fecini,fecfin,puesto) values 
					('$dni','$_REQUEST[empresa2]','$_REQUEST[sector2]','$_REQUEST[inicioex2]','$_REQUEST[finex2]','$_REQUEST[puesto2]')" or die ("Problemas en el insert". mysqli_error($conexion));
						mysqli_query($conexion,$exp2);
					}
					if(strcmp($_REQUEST['empresa3'],"")!=0){ $exp3="(insert into CEXPERIENCIA (dni,empresa,sector,fecini,fecfin,puesto) values 
					'$dni','$_REQUEST[empresa3]','$_REQUEST[sector3]','$_REQUEST[inicioex3]','$_REQUEST[finex3]','$_REQUEST[puesto3]')" or die ("Problemas en el insert". mysqli_error($conexion));
						mysqli_query($conexion,$exp3);
					}

					mysqli_query($conexion,$query);

					
						
					mysqli_close($conexion);
					Header("Location: menu_alumno.php");

?>