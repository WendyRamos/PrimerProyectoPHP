<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdh, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="shorcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/asistencia.css">
	<link rel="stylesheet" type="text/css" href="css/grid/asistencia.css">
	<title>Colegio Cramer</title>
</head>
<body>
	<div class="contenedor"> 
		<header>    
			<figure class="conlogo">
				<a href="index.php"><img class="logo" src="img/logo.png"></a>
			</figure>
			<div id="menu-btn" class="mbarras">
				<img class="mbarras1" src="img/mbarras.png">
			</div>
			<nav id="idmenu">
				<a href="" id="menu-cierre"><span class="btn-cerrar">X</span></a>
				<a href="index.php">INICIO</a>
				<a href="views/nosotros_view.php">NOSOTROS</a>
				<a href="views/SedeyCostos_view.php">SEDE Y COSTOS</a>
				<a href="#">BLOG</a>
				<a class="btn-admision" href="views/Admision2019_view.php">ADMISIÓN 2019</a>
				<a class="btn-IniciaSesion" href="login.php">CERRAR SESIÓN</a>
			</nav>
			<div class="lineaMenu"></div>
			<img src="img/rayita.png" alt="" class="rayita">
			<p>BIENVENIDO ADMINISTRADOR(A): <?php echo $resultado0['nombre']; ?></p>
			<img src="img/usuario.png" alt="" class="usuario">
		</header>
        <section>
            <h2>LA FECHA ACTUAL</h2>
            <button>ESCOGER FECHA</button>
            <table>
                <tr>
                    <th>Codigo</th>
                    <th>Nombres y Apellidos</th>
                </tr>
                <tr>
                    <!--td><?php echo $resultado['idalumno']; ?></td>
                    <td>
                    	<?php 
                    		echo $resultado['nombre']; 
                    		echo $resultado['paterno'];
                    		echo $resultado['materno'];
                    	?></td-->
                </tr>
            </table>
        </section>
		<footer>
				<h3>COLEGIO CRAMER</h3>
				<div class="barrita"></div>
				<a class="facebook" href="https://web.facebook.com/Colegio-Cramer-Puno-1785615131717744/" target="_blank"><img src="img/facebook.png"></a>
				<a class="youtube" href=""><img src="img/youtube.png"></a>
		</footer>
	</div>
	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>