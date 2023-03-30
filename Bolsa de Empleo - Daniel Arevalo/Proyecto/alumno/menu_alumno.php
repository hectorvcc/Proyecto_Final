<HTML LANG="es">
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
		margin: 100px 0px 0px 0px;
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
	
	<HEAD>
	   <TITLE>ALUMNOS - Menú Principal </TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	</HEAD>
	
	<BODY>

		<?php 
			session_start(); 
			$sesion = $_SESSION["var_sesion"];
			
			$conexion=mysqli_connect("localhost","root","","bolsaempleo") or die("Problemas en la conexion");
			$query= "select * from CURRICULUM where DNI= '$sesion'" or die ("Problemas en el select". mysqli_error($conexion));	
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
									
					<h1 class="h1">ÁREA PRIVADA DE <?php echo $fila['NOMBRE']." ".$fila['APE'] ?></h1>

			</div>
		</div>
	</div>
	</BODY>
</HTML>