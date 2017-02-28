<?php
session_start();
ob_start();				
					//hostname, username, password, db name
$mysqli=new mysqli('localhost','root','','mydatabase');

if($mysqli->connect_error){
	echo $mysqli->connect_error;
}


?>