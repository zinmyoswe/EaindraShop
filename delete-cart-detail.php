<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
 session_start();

  include('confs/config.php');
  $id = $_GET['id'];
$email = $_SESSION['email'];
$sql = "DELETE FROM cart WHERE product_id=$id and customer='$email'";
$run = mysqli_query($mysqli,$sql);


echo "<script>window.open('cart.php','_self')</script>";

?>
