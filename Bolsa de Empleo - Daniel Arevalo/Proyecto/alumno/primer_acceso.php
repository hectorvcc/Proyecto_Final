<HTML LANG="es">
	
	<style>
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

		div#acceso p{
			font: bold 25px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			color: rgba(33, 255, 144, .9);;
		}
		div#acceso h1{
			color: white;
			font: bold 45px 'Comic Sans MS',Arial,Helvetica,sans-serif;
			text-shadow:6px 4px 11px salmon;
		}
		
		div#acceso{
			width:840px;
			border-radius:100px 25px 100px 25px;
			text-align:center;
			margin:70px auto;
			height:auto;
			color: white;
			font: bold 15px 'Futura',Arial,Helvetica,sans-serif;
			padding: 10px 0;
			background: rgba(69, 193, 255, 0.3);
		}
		div#form{
			margin:20px auto;
			
		}
		div#h1{
			margin:30px auto;
		}
		.b{
			width: 70px;
			height: 70px;
		}
	</style>
	
	<HEAD>
	   <TITLE>ALUMNOS - Primer acceso </TITLE>
	   <meta content="text/html; charset=UTF-8" http-equiv="content-type">
	   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
	</HEAD>

	
	
	<BODY>
		<?php session_start(); 
			$sesion = $_SESSION["var_sesion"]; ?>
			
	<div id="principal">
		<div id="head">
		<header id="header">
			<div class="titulo">

					<img class="sim" style="float:left;" src="/Proyecto/ies.gif">
					<h1>IES ENRIQUE TIERNO GALVÁN</h1>
				
				<p>BOLSA DE EMPLEO</p>
			</div>
		</header>
		</div>
			<div id="acceso">
				<div id="h1">
					<H1>ALUMNO - PRIMER ACCESO</H1>
				</div>
		
	<div>
		<P>BIENVENIDO A LA BOLSA DE EMPLEO DEL IES ENRIQUE TIERNO GALVÁN.</p>
		<P>Para que las empresas se fijen en tí, necesitamos que completes tu currículum.</P>


			<p align="center">
					<table>
						<tr>
							<td width="222"><p><a href="acceso_alumno.php"><img class="b" src="/Proyecto/botones/volver-2.gif"></a></p></td>
							<td><p><a href="curriculum.php"><img class="b" src="/Proyecto/botones/accept.gif"></a></p></td>
						</tr>
					</table>
				</p>



	</div>
	
</HTML>