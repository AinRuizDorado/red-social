			
			<?php
				include('smarty/libs/Smarty.class.php');
				$smarty = new Smarty();
				session_start();
				$postear = file_get_contents('postear.txt');
				$post = explode("#", $postear);
				$post = explode("#", $postear);
				$smarty->assign('posteos', $post);
				$smarty->display("templates/main.tpl");	

            ?>
			<?php 
			
				
				
				
			/* 	echo '<div class="logout">Bienvenido '.$_SESSION["usuario"];
				echo '<a href="logout.php"> Log out</a> </div>'; */
			 ?>
