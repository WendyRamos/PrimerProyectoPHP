<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registrate</title>
    <link rel="stylesheet" type="text/css" href="css/registrate.css">
    <link rel="stylesheet" href="css/grid/registrate.css">
</head>
<body>
	<div class="contenedor">
        <header>    
			<figure class="conlogo">
				<a href="views/index.php"><img class="logo" src="img/logo.png"></a>
			</figure>
			<div id="menu-btn" class="mbarras">
				<img class="mbarras1" src="img/mbarras.png">
			</div>
			<nav id="idmenu">
				<a href="" id="menu-cierre"><span class="btn-cerrar">X</span></a>
				<a href="index.php">INICIO</a>
				<a href="views/nosotros_view.php">NOSOTROS</a>
				<a href="views/SedeyCostos_view.php">SEDE Y COSTOS</a>
				<a href="">BLOG</a>
				<a class="btn-admision" href="views/Admision2019_view.php">ADMISIÓN 2019</a>
				<a class="btn-IniciaSesion" href="login.php">INICIA SESIÓN</a>
			</nav>
			<div class="lineaMenu"></div>
        </header>
        <section>
		    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario"name="registrate">
			    <h1 class="titulo">Registrate</h1>

			    <input type="text" name="nombre" class="nombre" placeholder="Nombres y Apellidos">

			    <input type="email" name="email" class="email" placeholder="Correo">

			    <input type="password" name="password" class="password" placeholder="Contraseña">

			    <input type="password" name="password2" class="password2" placeholder="Repetir Contraseña">

			    <input type="submit" name="Enviar Datos" class="btn-form" onclick="registrate.submit()">

			    <?php if (!empty($errores)): ?>
				    <div class="error">
					    <ul>
						    <?php echo $errores; ?>
					    </ul>
				    </div>
			    <?php endif; ?>
            </form>
        </section>
        <footer>
				<h3>COLEGIO CRAMER</h3>
				<div class="barrita"></div>
				<a class="facebook" href="https://web.facebook.com/Colegio-Cramer-Puno-1785615131717744/" target="_blank"><img src="img/facebook.png"></a>
				<a class="youtube" href=""><img src="img/youtube.png"></a>
		</footer>
	</div>
</body>
</html>