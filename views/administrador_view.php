<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdh, initial-scale=1.0">
	<meta name="description" content="">
	<link rel="shorcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/administrador.css">
	<link rel="stylesheet" type="text/css" href="css/grid/administrador.css">
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
            <div class="contadorAsistencia verde">
                <p class="estado">ASISTENCIAS</p>
                <div class="circulo">
                	<?php 
                			echo $resultado['count(estadoasistencia_idestadoasistencia)'];
                	 ?>
                </div>
                <div class="linea">
					<a href="asistencia.php">Mas Información</a>
				</div>
            </div>
            <div class="contadorAsistencia naranja">
                    <p class="estado">TARDANZAS</p>
                    <div class="circulo">
                    	<?php 
                			echo $resultado1['count(estadoasistencia_idestadoasistencia)'];
                	 ?>
                    </div>
                    <div class="linea">
						<a href="tardanza.php">Mas Información</a>
					</div>
            </div>
            <div class="contadorAsistencia rojo">
                    <p class="estado">FALTAS</p>
                    <div class="circulo">20</div>
                    <div class="linea">
						<a href="falta.php">Mas Información</a>
					</div>
            </div>

            <button class="b1">MOSTRAR SEMANAL</button>
            <button class="b2">MOSTRAR MENSUAL</button>
            <button class="b3">MOSTRAR ANUAL</button>
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