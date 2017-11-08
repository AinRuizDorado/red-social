
			<?php 
				include('smarty/libs/Smarty.class.php');
				$smarty = new Smarty();
				$smarty->display("templates/main.tpl");	
/* 				session_start();
				
				echo '<div class="logout">Bienvenido '.$_SESSION["usuario"];
				echo '<a href="logout.php"> Log out</a> </div>'; */
			 ?>
			
			<?php
				$postear = file_get_contents('postear.txt');
				$post = explode("#", $postear);

					foreach ($post as $postear) {
						$post = explode("#", $postear);
	
                        echo '<div class="container">';
                        echo '<div class="foto">foto</div>';
                        echo '<div class="contenido"> <textarea readonly class="transparent" name="" id="" cols="65" rows="5">'.$post[0].'</textarea></div>';
                        echo '</div>';
                        
                    }
                   
            ?>
