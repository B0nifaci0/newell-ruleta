<?php
/* $servername = "localhost";
$username = "pompinyc_admin";
$password = "BONIfacio1996";
$db= "pompinyc_base";

*/
$servername = "localhost";
$username = "root";
$password = "";
$db= "newell";
$mysqli = mysqli_connect($servername, $username, $password, $db);
//guarda con acentos en la base de datos
$mysqli->set_charset('utf8');

?>
