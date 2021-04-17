<?php 
	use \Firebase\JWT\JWT;
	include 'vendor/autoload.php';

	$key = "123456";

	$payload = array(
    "name" => "Tahmid Ferdous",
    "password" => "123456789",
    "mobile" => 1356999524,
    "city" => 'Dhaka'
	);

	$encodedString = JWT::encode($payload, $key);
	echo $encodedString;
 ?>