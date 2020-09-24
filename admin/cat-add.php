<?php
	
	include('../confs/config.php');

	$name = $_POST['name'];
	

	$query = $mysqli->query("INSERT INTO categories(cat_name,created_date)
			VALUES ('$name',NOW())");
	

	

	echo "<script>window.open('cat-list.php','_self')</script>";

?>

