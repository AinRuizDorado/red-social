<html>
<head>
	<LINK REL=StyleSheet HREF="main.css" TYPE="text/css">
	<title>Red Social</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
<header>

</header>
<div class="bodypage">
 	<div>

		<div class="center">
			<div>
				Posts place
			</div>
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