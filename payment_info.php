<?php
  session_start();
  error_reporting(0);
  include('confs/config.php');
  // include('function/function.php');
  
  include('001header.php');
  include('004navbar.php');
  $customer = $_SESSION['email']; 
  
  $id = $_REQUEST['id'];
  
  $sql = "SELECT * FROM shipping where shipping_id=$id";
  $run =mysqli_query($mysqli,$sql);
  $row = mysqli_fetch_assoc($run);
  $_SESSION['shipping'] = $row['shipping_id'];
  
  ?>
  
  
  <br><br>


<style type="text/css">

  .ship{
            width: 245px;
            height: 255px;
           /*background-color: #ebf5fb;*/
           border-radius: 4px;
           border : 1px solid #aed6f1; 
         }
ul.list{
  list-style: none;
  margin: 20px;
  padding: 0;
  padding-top: 2px;

}
ul.list li{
  overflow: hidden;
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
  margin-bottom: 20px;
}
ul.list b{
  display: block;
  font-size: 12px;
  margin-bottom: 5px;
  color: #34495e;
}
ul.list i,ul.list small{
  display: block;
  
}

 
</style>

<!-- ---------------------------------Payment Page -------------------------- -->
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}

html,body{
font-family: 'Lato', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Abel', sans-serif;
}

.cart_sidebar{
    height: 365px;
    width: 300px;
    background-color: #f8f9fa;
}

a{
    color: black;
}
a:hover{
    color: black;
}

.pay_fr{
  background: #f8f9fa;
  width: 300px;
  height: 250px;
  padding: 2px;
}
.pay_in{
  margin: 10px;
  background-color: #fff;
  height: 220px;
  width: 280px;


}

/*Badge*/
.badge-pill {
    padding-right: .6em;
    padding-left: .6em;
    border-radius: 50%;
}

.badge-dark {
    color: #fff;
    background-color: black;
}

.tag-eain{
   margin-right: 20px;
}

/*card image*/

.card-img{
    margin-left: 450px;  
  }


.card-img img{
  width: 49px;
}

.card-img3{
  margin-left: 450px;
}

.card-img3 img{
  width: 49px;
}

.card-img4{
  margin-left: 450px;
}

.card-img4 img{
  width: 80px;
  margin-right: 8px;
}

.wave{
 border-radius: 5px;
}



.tive{

   border-bottom: 2px solid black;
}

    </style>
<!-- ---------------------------------Payment Page end -------------------------- -->

<div class="container">

   <span class="badge badge-pill badge-dark">1</span> <b class="tag-eain">BAG</b>
   <span class="badge badge-pill badge-dark">2</span> <b class="tag-eain">DELIVERY</b>
   <span class="badge badge-pill badge-dark ">3</span> <b class="tag-eain tive">PAYMENT</b>
   <span class="badge badge-pill badge-secondary">4</span> 
   <b class="tag-eain text-secondary ">ORDER COMPLETE</b>
   <hr>
  <br><br>
    <h2>PAYMENT METHOD</h2>
    
    <hr>

  <div class="row">
    <div class="col-md-8 order-md-1">

     

<!-- 26 form start -->




<div class="custom-control custom-radio mb-3">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1"><span class="fa fa-credit-card"></span>  CREDIT / DEBIT CARD</label>
  <div class="card-img">
<img src="https://www.adidas.com/glass/react/129ec05/assets/img/icon-adidas-visa.svg">
<img src="https://www.adidas.com/glass/react/129ec05/assets/img/icon-adidas-american-express.svg">
<img src="https://www.adidas.com/glass/react/129ec05/assets/img/icon-adidas-master-card.svg">
<img src="https://www.adidas.com/glass/react/129ec05/assets/img/icon-adidas-discover.svg">
</div>
</div>
<hr>


<div class="custom-control custom-radio mb-3">
  <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio4"><span class="fa fa-credit-card"></span>  WAVE MONEY / KBZ PAY</label>
  <div class="card-img3">
<img src="https://cdn.jobnet.com.mm/images/can/200/200/20190613033207-wave-money.png" class="wave">
<img src="https://www.kbzpay.com/wp-content/uploads/sites/9/2020/04/blue-L.png" class="wave2">



</div>
</div>

<style type="text/css">
  
</style>
<hr>
<div class="custom-control custom-radio mb-3">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">Cash in Hand</label>

  
</div>


<hr>
<div class="custom-control custom-radio mb-3">
  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio3">PAYPAL</label>

  <div class="card-img4">
<img src="https://www.adidas.com/glass/react/129ec05/assets/img/icon-adidas-paypal.svg">
<img src="https://www.adidas.com/glass/react/129ec05/assets/img/icon-adidas-paypal-credit.svg">
</div>
  
      <div class="pay-container">
                  <!--   AJAX PAY HERE  -->    
            </div>
</div>
<hr>
<script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#customRadio2").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $(".pay-container").html("");
        
        $.ajax({
          type:'post',
          data:{country_id:getCountryID},
          url: 'ajax_request_cash.php',
          success:function(returnData){
            $("#loader").hide();  
            $(".pay-container").html(returnData);
          }
        }); 
      }
      
    })
  });

    $(document).ready(function(){
    $("#customRadio3").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $(".pay-container").html("");
        
        $.ajax({
          type:'post',
          data:{country_id:getCountryID},
          url: 'ajax_request_paypal.php',
          success:function(returnData){
            $("#loader").hide();  
            $(".pay-container").html(returnData);
          }
        }); 
      }
      
    })
  });

    $(document).ready(function(){
    $("#customRadio1").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $(".pay-container").html("");
        
        $.ajax({
          type:'post',
          data:{country_id:getCountryID},
          url: 'ajax_request_credit.php',
          success:function(returnData){
            $("#loader").hide();  
            $(".pay-container").html(returnData);
          }
        }); 
      }
      
    })
  });
     $(document).ready(function(){
    $("#customRadio4").change(function(){
      var getCountryID = $(this).val();
      
      if(getCountryID !='')
      {
        $("#loader").show();
        $(".pay-container").html("");
        
        $.ajax({
          type:'post',
          data:{country_id:getCountryID},
          url: 'ajax_request_waveKBZ.php',
          success:function(returnData){
            $("#loader").hide();  
            $(".pay-container").html(returnData);
          }
        }); 
      }
      
    })
  });
</script>


<style type="text/css">
  .pay-lo{
    height: 18px;
  }
</style>
 
    </div>
     <!-- --------------col-md-8 order-md-1 end ------------------ -->
     
     <div class="col-md-4 order-md-2 mb-4">
            <div class="cart_sidebar">
                <br>

                <h4 style="font-weight: 600; font-size: 22px; margin-left: 9px;">ORDER SUMMARY:</h4>
                <div class="cart-calculator">
                    <table class="table">
                    <tr>
                        <td><?php echo $itemqty?> PRODUCTS</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Product total</td>
                        <td>$<?php echo $total ?></td>

                    </tr>

                    <?php

                        $taxRate=5;
                        $tax=$total*$taxRate/100;
                        $finaltotal=$total+$tax;                   
                    ?>
                     
                    <tr>
                        <td>Tax(5%)</td>
                        <td>$<?php echo $tax?></td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>FREE</td>
                    </tr>
                    <tr style="font-weight: bold">
                        <td>Total</td>
                        <td>$<?php echo $finaltotal ?></td>
                    </tr>
                      
                  

                    </table>
                </div>
            </div> <!-- {{-- cart_sidebar end --}} -->
            <br>
            
             <!-- {{--    Coupon start --}} -->
   <div class="pay_fr" >

    <div class="pay_in">
       
 
      <div class="shipping_inner">
        <div class="shipping_inner_style">
      <b>SHIPPING ADDRESS</b><br>

        <?php echo $row['full_name'] ?><br>
          <span class="fa fa-phone"></span> <?php echo $row['phone'] ?><br>
          <?php echo $row['street_address'] ?><br>
         <?php echo $row['city'] ?> , 
          <?php echo $row['state'] ?><br>
          
           <?php echo $row['country'] ?><br>
          <br>

          <?php $email = $_SESSION['email']; ?>
          <?php echo "$email"; ?><br>
          
          </div>
          </div> <!-- shipping inner end -->
</div>
</div>
  <!--   {{--    Coupon end --}} -->
    <br>
    
    <div class="ORDER DETAILS">
        <h4 style="font-weight: 600; font-size: 22px;">ORDER DETAILS</h4>

               <?php
      if(isset($_SESSION['cart'])) {

            $total = 0;
            $itemqty = 0;
           
            
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = "SELECT  product_name, qty, price,cover FROM product WHERE id = $product_id";
            $run = mysqli_query($mysqli,$result);
               
            if($run){

              ?>

                <?php
                
              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost
                $itemqty = $itemqty+$quantity;
                
                
               echo '
               <div class="container">
                <div class="row">
                
               ';
               echo '
                <div class="col-lg-5">
               <img src="admin/cover/'.$obj->cover.'" class="img_cartpage" >
                </div>
               ';
                echo '<div class="col-lg-7"><a href="" style="color: black;"> '.$obj->product_name.'</a>';
                echo '<p>$'.$obj->price.'</p>';
                echo '<p class="cart_p">COLOR: Black <br>
                   SIZE: 9.5  / Quantity: '.$quantity.'  </p>';
                

                echo ' </div>
               </div>
              </div>';
                
              }
             
            }

          }       
        }
        ?>


    </div> <!-- {{-- ORDER DETAILS end --}} -->
                <br>
    <div class="cart_needhelp">
            <h5>NEED HELP?</h5>
            <p><a href="" style="color: #000;">Shipping</a></p>
            <p><a href="" style="color: #000;">Returns & Exchanges</a></p>
    </div>

    <div class="cart_sidebar2">
    <h5>ACCEPTED PAYMENT METHODS</h5>
    <img src="https://www.adidas.com/on/demandware.static/-/Sites-adidas-US-Library/en_US/dw88ec105e/us_payment_methods.png" width="300px">

    
    </div><!-- {{--  cart_sidebar2 end --}} -->
                
     


                          </div><!-- col-md-4 order-md-2 mb-4 end -->
                        </div><!--  row end -->
                      </div> <!-- container end -->
                        
          
          












<!-- If you're using Stripe for payments -->
<script type="text/javascript" src=""></script>
<style type="text/css">

h3{
  font-family: AdineuePRO,Helvetica,Verdana,sans-serif;
font-style: normal;
color: #000;
font-size: 18px;
margin: 15px 0px;
line-height: 100%;
font-weight: 600;
padding: 4px;

}
h1{
    color: #5d6d7e;
    text-align: center;
}

.box {
        border-radius: 6px;
        border: 2px solid #009689;
        margin : 8px;
        padding: 8px;
        width: 200px;
        height: 100px;
        text-align: center;
        font-size: 45px;
        background-color: #009688;
    }
    .box a{
        color: white;
    }
   

h2{
  font-size: 26px;
line-height: 24px;
letter-spacing: 1.5px;
font-family: AdineuePRO,Helvetica,Verdana,sans-serif;
font-style: normal;
font-weight: 800;
color: #000;
}

</style>



<br><br><br>
<?php include('002footer.php'); ?>







<script src='jquery-3.3.1.js' type='text/javascript'></script>
<script src='bootbox.min.js'></script>
<script src='shipping_del_script.js' type='text/javascript'></script>

</body>
</html>



