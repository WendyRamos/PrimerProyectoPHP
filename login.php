<?php session_start();

if (isset($_SESSION['email'])) {
	header('Location: administrador.php');
} 

$errores = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = filter_var(strtolower($_POST['email']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	try {
		$conexion = new PDO('mysql:host=localhost; dbname=asistenciadb', 'root', '');
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
/*nombre_usuario, password*/
	$statement = $conexion->prepare('
		SELECT email, password FROM asistenciadb.usuario WHERE email = :email AND password = :password');

	$statement->execute(array(':email' => $email,':password' => $password));

	$resultado = $statement->fetch();

	if ($resultado !== false) {
		$_SESSION['email'] = $email;
		header('Location: index.php');
	} else {
		$errores .= '<li>El usuario o la contraseña estan mal</li>';
	}

	$statement1 = $conexion->prepare('SELECT rol_idrol FROM asistenciadb.privilegios WHERE rol_idrol = 1');

	$statement1->execute();
	$resultado2 = $statement->fetchAll();

	if ($statement1 == 1) {
		header('Location: administrador.php');
	} else {
		header('Location: administrador.php');
	}
}

require 'views/IniciaSesion_view.php';
?>