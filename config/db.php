<?php 
	$server 	= 'localhost';
	$username 	= 'root';
	$password 	= '';
	$database 	= 'bdsdmp';
	
	$db = mysqli_connect($server, $username, $password, $database);
	
	if(!$db){
		echo 'Gagal koneksi ke database. ' . mysqli_connect_error(); die;
	}

?>