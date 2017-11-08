<!DOCTYPE html>
<!-- la idea seria atajar el formulario y hacer validaciones javascript
para atajar el formulario, en el tag FORM metes un onsubmit="mi_funcion(); return false;"
y despues creas una funcion mi_funcion que levante parametros desde el html y se fije si estan vacios
si alguno esta vacio "return false"
(((en el onsubmit no va el return false, sino nunca se manda)))
la idea tambien seria que si algun campo este mal, javascript ponga display BLOCK sobre algun div escondido que diga "falta el nombre"
todo esto, en el html tenes que ponerlo en un tag <script> </script>
podes probar si funciona poniendo simplemente un alert("hola"); -->
<html>
<head>
	<LINK REL=StyleSheet HREF="index.css" TYPE="text/css">
	<LINK REL=StyleSheet HREF="../bootstrap/css/bootstrap.css" TYPE="text/css">
	<script src="index.js">
	</script>

	<title>Red Social</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
<div class="bg">
	<div class="header"><img src="../../images/logo.png" alt="imagen logo" class="img">
		<div class="padheader">	
			<form name="formPost" onsubmit="return isvalidLog()" action="../log/login.php" method="post" >
 				Usuario: <input type="text" name="usuario">
				Contraseña: <input type="password" name="pw">
				
			  <input type="Submit" value=" ¡Logearse! ">
			  <div  id="isEmply"></div>
			</form>		
		
		</div>
	</div>
	<div>
		<div class="fix">
			<div class="titulo">
				Crea una cuenta
			</div>
			<div class="registro">
				<form name="formPost"  action="../log/registro.php" method="post" >
 					<input type="text" name="usuario" placeholder="Usuario" class="pad">
					<input class="pad" type="password" name="pw" placeholder="Contraseña">
					  <input class="pad" type="Submit" value=" ¡Terminado! ">
					  <div id="isEmply2"></div>
				</form>	
			</div>
		</div>
	</div>
</div>

</body>
</html>