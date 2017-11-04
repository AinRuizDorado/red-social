<?php
	if(empty($_POST["mensaje"])){
	echo "Mensaje incorrecto intentelo nuevamente";
	header('Location: main.php');

}else{
	sleep(4);
	header('Location: main.php');
	$postear = 'postear.txt';
	$datos = $_POST["mensaje"].'#';
	file_put_contents($postear, $datos, FILE_APPEND);
}

?>

