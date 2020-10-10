<?php
	
	include('confs/config.php');

	$id = $_GET['id'];
	$sql = $mysqli->query("DELETE FROM add_to_favourite WHERE fav_id = $id");


	echo "<script>window.open('dashboard.php','_self')</script>";

?>