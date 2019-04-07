<?php 
	$connection = new mysqli("localhost", "root", "", "fibonachi");

	$connection->query("SET NAMES utf8");

	if ($connection->connect_error) {
		echo "error";
	}


?>