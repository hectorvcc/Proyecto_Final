<html>
<head>
	<meta content="text/html; charset=UTF-8;" http-equiv="content-type">
	<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	<title>
		PROFESOR - Modificar Alumno
	</title>
</head>
<style>
	img.foto{
		width:100px;
		height: 150px;
 		display: block;
	
		margin: 5px 22px 22px 55px;
		background-color: rgba(255,255,255,.4); 
		padding: 4%;
		border-radius:40%;
		transition:box-shadow .4s;
				
	}

a:link   
{   
 text-decoration:none;   
}  
	div#menu ul li:hover{
		padding-left:50px;
		background-color: white;
		color: lightskyblue;
		-moz-box-shadow: 17px 6px 41px white;
		-webkit-box-shadow: 17px 6px 41px white;
		font: bold 21px 'Comic Sans MS',Arial,Helvetica,sans-serif;
	}
	div#menu{
		width: 15%;
		float:left;
		margin-top:20px;
		height: 100%;
		position:relative;
        display:block;
	}
	
	div#pagina{
		margin: 1% auto;
		width: 85%;
		float: left;
		height: auto;
		
	}
	div#principal{
		width: auto;
		height: auto;
		margin: 4%;
	}
	.h1{
			margin: 0px 110px 20px 110px;
			color: white;
			font: bold 55px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 11px blue;
			text-align:center;
		}
	
			p{
			margin:10px auto;
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
	.ima{
		position:absolute;
        display:block;
		margin: 20px 0px 0px 0px;
	}
	.ul{
		margin: 222px 0px 0px 0px;
		position:absolute;
        display:block;
	}
	.p{
		padding: 1%;
		text-align: left;
		color: purple;
		font: bold 21px Comic Sans MS,Arial,Helvetica,sans-serif;
	}
	.pp{
		text-align: center;
		color: purple;
		font: bold 28px Comic Sans MS,Arial,Helvetica,sans-serif;
	}
	input[type=text], input[type=number], input[type=password] {
			margin: 5px;
			padding: 0 10px;
			width: 220px;
			height: 30px;
			color: Blue;
			background: white;
			border: 100px;
			font-size: 20px;
			border-radius: 18px;
			
			-moz-outline-radius: 8px;
			-webkit-box-shadow: inset 5px 5px 22px rgba(11, 88, 255, 0.7);
			
		}
		div#acceso{
			width: 840px;
			border-radius:150px 75px 150px 75px;
			text-align:center;
			margin: 5px auto;
			height: 340px;			
			font: bold 15px 'Futura',Arial,Helvetica,sans-serif;
			padding: 3%;
			background: rgba(255, 255, 255, 0.3);
		}
		
	</style>



<BODY>

<?php

	$ID=$_REQUEST['id'];

	$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
	$query= "select * from ALUMNOS where DNI= '$ID'" or die ("Problemas en el select". mysqli_error($conexion));	
	$cons=mysqli_query($conexion,$query);	
	$fila=mysqli_fetch_array($cons);
	
	?>
	
		<div id="menu" class="div">
				<div class="ima">
					<img class="foto" src="/Proyecto/botones/profesores-2.gif">
				</div>
				<div class="ul">
				
					<ul>
						<a href="alta_alum.php"><li>Alta de Alumnos</li></a>
						<a href="ver_alum.php"><li>Ver Alumnos</li></a>
						<a href="ver_inscritos.php"><li>Ver Alumnos Inscritos en Ofertas</li></a>
						<a href="/Proyecto/empresa/form_empresa.php?n=2"><li>Alta de Empresas</li></a>
						<a href="ver_empresas.php"><li>Ver Empresas</li></a>
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
					
					<h1 class="h1">MODIFICAR ACCESO DE <?php echo $fila['NOMBRE'] ?></h1>
					<div id="acceso">
					<P class="pp">Modifique los datos:</P>
					<FORM CLASS="borde" ACTION="modif_alum2.php?id=<?php echo $ID ?>" METHOD="POST" autocomplete="on" enctype="multipart/form-data">
						<p align="center">
							<table class="tabla" width="500">
								<tr >
									<td><p class="p">Nombre Alumno: </p></td><td><p class="p"><INPUT TYPE="text" maxlength="30" NAME="nombre" title="Ingrese el Nombre" placeholder="Nombre" value="<?php echo $fila['NOMBRE'] ?>" required></p></td>
								</tr>
								<tr>
									<td><p class="p">DNI / NIE</p></td><td><p class="p"><INPUT TYPE="text" maxlength="9" NAME="dni"  placeholder="DNI o NIE" value="<?php echo $fila['DNI'] ?>" required pattern="([0-9]{8}([A-Z]|[a-z]))|(([X|Y|Z]|[x|y|z])[0-9]{7}([A-Z]|[a-z]))" title="DNI:12345678X o NIE: [XYZ]1234567X" ></p></td>
								</tr>
								<tr>
									<td><p class="p">Nº de Expediente</p></td><td><p class="p"><INPUT TYPE="number" min="1000" max="10000" NAME="exp"  placeholder="Nº Exp." value="<?php echo $fila['EXP'] ?>" required></p></td>
								</tr>
								<tr>								
									<td colspan="2"><p align="center"><INPUT TYPE="submit" NAME="aceptar" VALUE=""></p></td>
								</tr>
							</table>	
						</p>
						</div>
					</FORM>
					
				</div>
		</div>
	
	
	</BODY>
</HTML>