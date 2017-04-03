<?php
$db_user = 'root';
$db_pass = '';
$db_name = 'test';
$db_host = 'localhost';

$query = "UPDATE objects SET post_title = 'Test 4', post_content = 'test 4 content', post_name = 'test_4' WHERE ID = 3";

/*$mysqli =new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect+error);
	exit();
}

$result = $mysqli->query($query);

print_r($result);*/

try {
	$conn = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$results = $conn->query($query);

	print_r($results);
}	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}	

?>