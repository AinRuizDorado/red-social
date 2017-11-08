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
		$json = file_get_contents('usuarios.JSON');
		$mydata = json_decode($json,true);
		foreach ($mydata as $usuario) {
			if ($usuario['usuario'] == $user  && $usuario['pw'] == $pass) {
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
