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

 

  .KBZ{
       background-color: #0054a6;
  }
  .KBZPAY{
    width: 400px;

  }
  h1{
    text-align: center;
    color: #fff;
  }
  
</style>




<div style="height: 80px;"></div>

<section class="KBZ">
 <div class="container">
  <br><br>
  <h1>Pay with KBZ</h1>
   <div class="row">

       <div class="col-md-4">
           
       </div>
       <div class="col-md-4">
           <img src="image/KBZPay.jpg" class="KBZPAY" >

           <?php
              include('confs/config.php');

        $email = $_SESSION['email'];
        $shipping = $_SESSION['shipping'];
        $result = mysqli_query($mysqli,"SELECT * FROM shipping where shipping_id='$shipping'");
        $row = mysqli_fetch_assoc($result);

        // print_r($email);
        // print_r($shipping);
           ?>

          <form method="post" action="order-update2.php" enctype="multipart/form-data" id="debit-form">

            <input type="submit" name="submit" class="btn btn-outline-light float-right " value="Success Pay with KBZPay" id="btn-debit">
            <a href="payment_info.php?id=<?php echo $shipping ?>" class="btn btn-light float-right" style="margin-right: 5px;">Back</a>
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





        
