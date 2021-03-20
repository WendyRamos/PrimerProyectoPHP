<?php session_start();
if (isset($_SESSION['email'])) {
	header('Location: login.php');
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $password = $_POST['password'];
	$password2 = $_POST['password2'];

	//echo "$usuario . $password . $password2";

	$errores = '';

	if (empty($nombre) or empty($password) or empty($password2) or empty($email)) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>';
	} else {
		try {
			$conexion = new PDO('mysql:host=localhost; dbname=asistenciadb', 'root', '');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}

		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);

		if ($password !== $password2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}
	}

	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO asistenciadb.usuario (idusuario, nombre, password, email) VALUES (null, :nombre, :password, :email)');
		$statement->execute(array(
			':nombre' => $nombre, 
			':password' => $password, 
			':email' => $email, 
		));

		header('Location: login.php');
	}
} 

	require 'views/registrate_view.php';
?>