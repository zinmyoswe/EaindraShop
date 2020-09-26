<?php
  session_start();
  error_reporting(0);
  include('confs/config.php');
    
?>

<?php
        if(!isset($_SESSION['email'])){

          include("login.php");
        }
        else{
          include("shipping_info.php");
        }

?>