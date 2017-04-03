<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$db_user = 'root';
$db_pass = '';
$db_name = 'test';
$db_host = 'localhost';


$time = time();

//$mysqli =new mysqli($db_host, $db_user, $db_pass, $db_name);

//to sanitize data if using a form 
//$title = $mysqli->real_escape_string($_POST['title']);

$query = "INSERT INTO objects (post_title, post_content, post_name, post_date) 
		VALUES('Test 3', 'Test 3 content', 'text_3', FROM_UNIXTIME({$time}))";

/*
if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect+error);
	exit();
}

$result = $mysqli->query($query);

print_r($result);
*/
try {
	$conn = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$results = $conn->query($query);

	print_r($results);
}	catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}	

?>