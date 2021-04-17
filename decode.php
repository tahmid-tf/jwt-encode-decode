<?php 
	use \Firebase\JWT\JWT;
	include 'vendor/autoload.php';

	$key = "123456";
	$jwt = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiVGFobWlkIEZlcmRvdXMiLCJwYXNzd29yZCI6IjEyMzQ1Njc4OSIsIm1vYmlsZSI6MTM1Njk5OTUyNCwiY2l0eSI6IkRoYWthIn0.d3v0Prgf2DIhyP-4-kM_PlIhFlEjrNciwvbvawtpZbc";


	$decoded = JWT::decode($jwt, $key, array('HS256'));

	print_r($decoded);
?>