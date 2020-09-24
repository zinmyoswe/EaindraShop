<?php
	
	include('../confs/config.php');

	$id = $_GET['id'];
	$sql = $mysqli->query("DELETE FROM brand WHERE brand_id = $id");


	echo "<script>window.open('brand-list2.php','_self')</script>";



?>