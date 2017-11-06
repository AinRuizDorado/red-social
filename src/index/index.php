<!DOCTYPE html>
<html>
<head>
	<LINK REL=StyleSheet HREF="index.css" TYPE="text/css">
	<title>Red Social</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
<div class="bg">
	<div class="header"><img src="../../images/logo.png" alt="imagen logo" class="img">
		<div class="padheader">	
			<form action="../log/login.php" method="post" onsubmit="isvalidLog()">
 				Usuario: <input type="text" name="usuario">
				Contraseña: <input type="password" name="pw">
	  		<input type="Submit" value=" ¡Logearse! ">
			</form>		
		</div>
	</div>
	<div>
		<div class="fix">
			<div class="titulo">
				Crea una cuenta
			</div>
			<div class="registro">
				<form action="../log/registro.php" method="post" onsubmit="isvalidLog()">
 					<input type="text" name="usuario" placeholder="Usuario" class="pad">
					<input class="pad" type="password" name="pw" placeholder="Contraseña">
		  			<input class="pad" type="Submit" value=" ¡Terminado! ">
				</form>	
			</div>
		</div>
	</div>
</div>

</body>
</html>