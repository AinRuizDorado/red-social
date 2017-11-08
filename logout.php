<?php
	session_start();
	session_destroy();
	header('Location: index.php');
	sleep(3);
?>