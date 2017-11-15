<?php
$db = mysqli_connect("127.0.0.1","root","","datos");

/*$query='SELECT * FROM usuario';
$res = $db->query($query);
//echo $res->num_rows;
while($data=$res->fetch_assoc()){
    print_r($data);
}
*/
$query="INSERT INTO usuario (usuario,pw) VALUES ('ain','ain')";
$res = $db->query($query);

/*$query='SELECT * FROM usuario';
$res = $db->query($query);
//echo $res->num_rows;
while($data=$res->fetch_assoc()){
    print_r($data);
}
*/
?>