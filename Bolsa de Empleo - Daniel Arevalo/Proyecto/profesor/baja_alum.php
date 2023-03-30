<HTML LANG="es">

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
	div#menu ul li{
		margin-top:20px;
		
		font: bold 18px 'Comic Sans MS',Arial,Helvetica,sans-serif;
		text-decoration:none;
		background-color: lightcyan;
		width:250px;
		padding-top:10px;
		padding-bottom:10px;
		border-radius:0px 20px 20px 0px;
		padding-left:20px;
		-moz-box-shadow: 17px 6px 41px cyan;
-webkit-box-shadow: 7px 3px 34px lightcyan;
		-webkit-transition:padding-left 0.6s;
		color:	DodgerBlue;
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
		font: bold 30px Comic Sans MS,Arial,Helvetica,sans-serif;
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
		.imag{
			width: 65px;
			height: 65px;
		}
		
	</style>

	<HEAD>
	   <TITLE>PROFESOR - Baja de Alumnos</TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>
	
	<BODY>
		<?php
			$ID=$_REQUEST['id']	;
			
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from ALUMNOS where DNI= '$ID'" or die ("Problemas en el select". mysqli_error($conexion));	
			$cons=mysqli_query($conexion,$query);	
			$fila=mysqli_fetch_array($cons);
			mysqli_close($conexion);	
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
					
					<h1 class="h1">BAJA DE <?php echo $fila['NOMBRE'];?></h1>
		
					<div class="acceso">
						<P class="pp">¿Estás seguro?</p>
						<P class="pp">Si borra el alumno, perderá el acceso a la Bolsa de Empleo y todo el contacto con las empresas</P>
						
						<p align="center">
							<table>
								<tr>
									<td width="150"><p><a href="ver_alum.php"><img class="imag" src="/Proyecto/botones/cruz.gif"></a></p></td>
									<td><p><a href="baja_alum2.php?id=<?php echo $ID ?>"><img class="imag" src="/Proyecto/botones/tick.gif"></a></p></td>
								</tr>
							</table>
						</p>
						
					</div>	
				</div>
		
	</BODY>
</HTML>