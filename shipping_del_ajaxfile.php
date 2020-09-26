<?php 
 session_start();
 include('confs/config.php');
 error_reporting(0);

 $id = $_GET['id'];

// Delete record
$query = "DELETE FROM shipping WHERE shipping_id=".$id;
mysqli_query($mysqli,$query);

header("location: shipping_info.php");




