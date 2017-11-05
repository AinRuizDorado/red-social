<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>Registrarse</title>
</head>
<body>
<div>
	
<?php
	function mirror_user($user){
		$usuarios = file_get_contents('usuarios.txt');
		$mirror = explode('@', $usuarios);
		foreach ($mirror as $usuario) {
			$parte = explode("#", $usuario);
				if ($user == $parte[0]) {
					return true;	
				}
		}
		return false;
	}
	if(empty($_POST['usuario']) || empty($_POST['pw'])){
   		echo "Campos de usuario o contraseña incompletos";

			}elseif (mirror_user($_POST['usuario'])) {
				echo "Ese usuario ya existe";
			}else{
				session_start();
				# registro de datos de usuario a txt
				$datos = $_POST['usuario'].'#'.$_POST['pw'].'@';
				# guardado de variables a la sesion global
				$postear = 'usuarios.txt';
				file_put_contents($postear, $datos, FILE_APPEND);
				
				echo"Exito, Su cuenta se creo correctamente por favor inicia sesion";
}
?>
<br>
<a href="index.php">Volver al inicio</a>
</body>
</html>