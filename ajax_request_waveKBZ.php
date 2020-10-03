
  
  <style type="text/css">
    .error{
      color: #DC3545;
      font-size: 13px;

    }
    .wave3{
      margin-top: 5px;
      width: 115px;
      border-radius: 20px;
    }
    .kbz{
      width: 128px;

    }
  </style>


<!--  ==================login form ======================== -->
<?php 
	
	session_start();
        include('confs/config.php');
        $email = $_SESSION['email'];
        $shipping = $_SESSION['shipping'];
        $result = mysqli_query($mysqli,"SELECT * FROM shipping where shipping_id='$shipping'");
        $row = mysqli_fetch_assoc($result);


	if(isset($_POST['country_id']) && $_POST['country_id'] !='')
	{ ?>
                
                <div class="container">
  <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-8">
         <div class="panel-body">
          <h3>Pay with WavePay / KBZ PAY</h3>
      

            <div class="row">
              <div class="col-md-3">

                <a href="WavePay.php"><img src="https://cdn.jobnet.com.mm/images/can/200/200/20190613033207-wave-money.png" class="wave3"></a>
                 
              </div>
              <div class="col-md-3">
                <a href="KBZPay.php"><img src="https://www.kbzpay.com/wp-content/uploads/sites/9/2020/04/blue-L.png" class="kbz"></a>
              </div>
            
            </div>
            
           
                          
          
                        
            
                      


                        
      </div> <!-- panel-body -->
    </div><!--  col-md-6 end -->
    <div class="col-md-6 col-sm-6 col-xs-6"></div><!--  col-md-6 end -->
  </div> <!-- row end -->
</div><!--  container end -->
		
	  
                        <br><br>
                        
		
<?php	}

?>





