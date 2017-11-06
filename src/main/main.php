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
				<form action="../post/post.php" method="post" name="formPost" onsubmit="isvalidPost()">
					<textarea name="mensaje" cols="65" rows="5" placeholder="asd" maxlength="140" onkeyup="textCounter(this,'counter',140);" id="message"></textarea>
                    <input type="Submit" value="post" class="boton" > 
                    <input disabled class="botonlength"  maxlength="140" size="3" value="140" id="counter">
				</form>
		    </div>
			<?php
				$postear = file_get_contents('../post/postear.txt');
				$post = explode("#", $postear);
				print_r($post);

				

					foreach ($post as $postear) {
						$post = explode("#", $postear);
	
                        echo '<div class="container">';
                        echo '<div class="foto">foto</div>';
                        echo '<div class="contenido">'.$post[0].'</div>';
                        echo '</div>';
                        
                    }
                   
            ?>
			<div class="container">
				<div class="foto">foto</div>
				<div class="contenido">post aqui</div>
			</div>
		</div>
	</div>


</div>

</body>
</body>
</html> 