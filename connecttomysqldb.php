<?php
$db_user = 'root';
$db_pass = '';
$db_name = 'test';
$db_host = 'localhost';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_errno);
	exit();
}

//CONNECT VIA PDO
/*try {
	$conn = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}*/

?>