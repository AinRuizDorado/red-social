<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>LogIn</title>
</head>
<body>
<div>
	
<?php
	function mirror_user($user,$pass){
		$usuarios = file_get_contents('usuarios.txt');
		$mirror = explode('@', $usuarios);
		foreach ($mirror as $usuario) {
			$parte = explode("#", $usuario);
			if ($user == $parte[0] && $pass == $parte[1]) {
				return true;	
			}
		}
		return false;
	}
	if(empty($_POST['usuario']) || empty($_POST['pw'])){
    echo "Campos de usuario o contraseña incompletos";

		}elseif (!mirror_user($_POST['usuario'],$_POST['pw'])) {
			echo "Usuario o contraseña incorrectos";
				}else{
					session_start();

					# guardado de variables a la sesion global
					$_SESSION['usuario'] = $_POST['usuario'];
	
					header('Location: main.php');
					
					}
?>
<br>

</body>
</html>