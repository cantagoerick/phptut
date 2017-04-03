<!DOCTYPE html>
<html>
<head>
	<title>My php</title>
</head>
<body>

<script language="php">
	echo '<p> Some code</p>';
</script>

<?php
	$msg = 3;
	if ($msg ==3) {
		echo 'yes';
	} else {
		echo 'no';
	}


?>


<?php
	$arr = array(
		"foo" => "bar",
		"foo2" => "bar2",
		"post_title" => "Heloo World"

		);
	echo $arr["post_title"];
?>
<?php
	class foo
	{
		function do_foo()
		{
			echo "Doing foo.";
		}
	}
	$bar = new foo;
	$bar->do_foo();
?>



<?php
	$fname = $_POST['fname'];
?>
<?php if (empty( $fname ) ) : ?>
		<form method="post" action="demo.php">
			<input type="text" name="fname" />
			<input type="submit" value="Send it" />
		</form>
<?php else : ?>
<p><?php echo $fname; ?></p>
<?php endif; ?>
<p>I hope you enjoy the course!</p>		
erick cantago
</body>
</html>