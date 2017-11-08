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
		$json = file_get_contents('usuarios.JSON');
		$mydata = json_decode($json,true);
		foreach ($mydata as $usuario) {
				if ($usuario['usuario'] == $user ) {
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
				$usuarios = file_get_contents('usuarios.JSON');
				$json = json_decode($usuarios, true);
				$array = array('usuario'=> $_POST['usuario'],'pw'=> $_POST['pw']);
				$json[] = $array;
				$json = json_encode($json);
				file_put_contents("usuarios.JSON", $json);
				
				echo"Exito, Su cuenta se creo correctamente por favor inicia sesion";
}
?>
<br>
<a href="index.php">Volver al inicio</a>
</body>
</html>