<?php
	use \Firebase\JWT\JWT;
	require '../vendor/autoload.php';
	include '../config.php';
	
	$json = file_get_contents("php://input");
	if ($json) {
		$obj = json_decode($json);
		echo $obj->id;
		echo $obj->pwd;
	}

?>