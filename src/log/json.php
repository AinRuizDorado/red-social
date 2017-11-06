<?php
$JSON = file_get_contents('usuarios.JSON');
$usuarios = json_decode($JSON);
$usuarios = json_decode($JSON, true);
echo $usuarios['name'];

?>