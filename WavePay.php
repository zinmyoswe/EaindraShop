<?php
	session_start();
	include('confs/config.php');

        $email = $_SESSION['email'];
        $shipping = $_SESSION['shipping'];
        $result = mysqli_query($mysqli,"SELECT * FROM shipping where shipping_id='$shipping'");
        $row = mysqli_fetch_assoc($result);
?>


  <?php include('001header.php'); ?>
  <?php include('004navbar.php'); ?>
 <link rel="stylesheet" type="text/css" href="style.css">
 <script src="angular.min.js"></script>

        
        

<style type="text/css">

 

  .Wave{
       background-color: #fce51b;
  }
  .WavePAY{
    width: 400px;

  }
  h1{
    text-align: center;
    color: #000;
  }
  
</style>




<div style="height: 80px;"></div>

<section class="Wave">
 <div class="container">
  <br><br>
  <h1>Pay with Wave</h1>
   <div class="row">

       <div class="col-md-4">
           
       </div>
       <div class="col-md-4">
           <img src="image/WavePay2.jpg" class="WavePAY" >

           <?php
              include('confs/config.php');

        $email = $_SESSION['email'];
        $shipping = $_SESSION['shipping'];
        $result = mysqli_query($mysqli,"SELECT * FROM shipping where shipping_id='$shipping'");
        $row = mysqli_fetch_assoc($result);

        // print_r($email);
        // print_r($shipping);
           ?>

          <form method="post" action="order-update5.php" enctype="multipart/form-data" id="debit-form">

            <input type="submit" name="submit" class="btn btn-outline-primary float-right " value="Success Pay with WavePay" id="btn-debit">
            <a href="payment_info.php?id=<?php echo $shipping ?>" class="btn btn-primary float-right" style="margin-right: 5px;">Back</a>
          </form>

          <br><br>
       </div>
       <div class="col-md-4">
         
       </div>
   </div>
 </div>

 </section>







<?php include('002footer.php'); ?>
</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

   


  
</html>





        
