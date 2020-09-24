<?php
	
	include('../confs/config.php');

	$id = $_GET['id'];
	$sql = $mysqli->query("DELETE FROM categories WHERE cat_id = $id");


	echo "<script>window.open('cat-list2.php','_self')</script>";




?>