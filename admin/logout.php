<?php
session_start();

//to delete session
session_destroy();

//redirect to index.php
header("Location:../index.php");

?>