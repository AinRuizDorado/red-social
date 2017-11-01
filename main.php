<html>
<head>
	<LINK REL=StyleSheet HREF="main.css" TYPE="text/css">
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
			<div class="logout">Bienvenido <a href="logout.php">session destroy</a></div>
		</div>

	</div>
	<div>
		<div class="centerpost">
			<div class="spamtable">
				<span> <a href="">Post</a></span> <span> <a href="">fotos</a></span>
			</div>
			<div class="post"> lorem</div>
		</div>
	</div>

<?php
$postear = file_get_contents('postear.txt');

$post = explode('@', $postear);
print_r($post);
	echo "<table class=tablecenter> ";

foreach ($post as $postear) {
	$post = explode("#", $postear);
	echo "<br>";
	print_r($post);
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<tr>";
	echo "<td>"."Usuario:".$post[1]."<br>"." Mensaje= ".$post[0]."</td>";
	echo "</tr>";
}
echo "</table>";
?>
</div>
</body>
</body>
</html>