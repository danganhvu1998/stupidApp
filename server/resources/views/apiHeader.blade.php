<?php
	header('Access-Control-Allow-Origin: *');
	try{
		$username = $_POST['username'];
		$password = $_POST['password'];	
		$rememberMe = $_POST['rememberMe'];	
	} catch {
		$username = $_GET['username'];
		$password = $_GET['password'];
		$rememberMe = $_GET['rememberMe'];
	}
	echo "LOL apiHeader.blade.php<br>";
	echo $username."<br>";
	echo $password."<br>";
	echo $rememberMe."<br>";
	
?>