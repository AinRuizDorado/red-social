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
	<LINK REL=StyleSheet HREF="main.css" TYPE="text/css">
	<script src="main.js"></script>
	<title>Red Social</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
<header>

</header>
<div class="main">
 	<div>

		<div class="supheader">
			<div>
				Logo
			</div>
			<?php 
				session_start();
				
				echo '<div class="logout">Bienvenido '.$_SESSION["usuario"];
				echo '<a href="logout.php"> Log out</a> </div>';
			 ?>
			
		</div>

	</div>
	<div>
		<div class="centerpost">
			<div class="spamtable">
				<span> <a href="">Post</a></span> <span> <a href="">fotos</a></span>
			</div>
			<div class="containerheader">
				<form action="post.php" method="post">
					<textarea name="mensaje" cols="57" rows="10" placeholder="asd"></textarea>
					<input type="Submit" value="post" class="prueba">
				</form>
			</div>
			<div class="container">
				<div class="foto">foto</div>
				<div class="contenido">post aqui</div>
			</div>
		</div>
	</div>

<?php
$postear = file_get_contents('postear.txt');

$post = explode('@', $postear);
print_r($post);
/* 	echo "<table class=tablecenter> ";

foreach ($post as $postear) {
	$post = explode("#", $postear);
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<tr>";
	/* echo "<td>"."Usuario:".$post[1]."<br>"." Mensaje= ".$post[0]."</td>"; */
/* 	echo "</tr>";
	
}
echo "</table>"; */
?>
</div>

</body>
</body>
</html>