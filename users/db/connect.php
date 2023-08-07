<?php

$servername = "localhost";
$username = "trixbxox_tri";
$password = "trixec2020";
$db = "trixbxox_trixec";

$dbc = mysqli_connect($servername,$username,$password,$db);
    
if($dbc){
 
} else{
	die("dbcnecton failed: ".mysqli_connect_error());
}


?>