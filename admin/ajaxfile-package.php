<?php 
include "confs/config.php";

if(isset($_POST['id'])){
	$id = $_POST['id'];

	// Delete record
	$sql = "DELETE FROM package WHERE package_id=".$id;
	mysqli_query($mysqli,$sql);
	echo 1;
		exit;
	}

echo 0;
exit;