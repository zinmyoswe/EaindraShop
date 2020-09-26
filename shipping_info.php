<?php include('001header.php'); ?>
<?php include('004navbar.php'); ?>
<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  $email = $_SESSION['email'];
  


?>

<style type="text/css">




.ship{
            width: 245px;
            height: 273px;
           /*background-color: #ebf5fb;*/
           border-radius: 4px;
           border : 1px solid lightgrey; 
         }
ul.list{
	list-style: none;
	margin: 20px;
	padding: 0;
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

<!-- ---------------------------------Shipping Page -------------------------- -->
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

    </style>
<!-- ---------------------------------Shipping Page end -------------------------- -->
<br>
 <div class="container">

        <br><br>
    <h2>DELIVERY METHOD</h2>
    <p class="lead">Free Shipping and Free Returns</p>

    <hr>

    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">SHIPPING ADDRESS</h4>

        <!-- {{-- success error msg start --}} -->
    

        <!-- {{-- success error msg end --}} -->

		<script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  
              <div class="panel-body">
                        <form method="post" action="shipping_to_home.php" enctype="multipart/form-data">

                        <div class="mb-3">
                           <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" readonly>
                        </div>
                        
                        <div class="mb-3">
                         <label for="lastName">Full Name</label>
                        <input type="text" name="name" class="form-control" id="lastName" placeholder="" value="" required>
                        </div>
  
                        <div class="mb-3">
                        <label for="lastName">Address</label>
                        <input type="text" name="street" class="form-control" id="lastName" placeholder="" value="" required>
                        </div>
                        
                      <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select name="country" class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>Myanmar</option>
                  <option>Thailand</option>
                  
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select name="state" class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>Yangon</option>
                  <option>Mandalay</option>
                  <option>Naypyitaw</option>
                  <option>Bangkok</option>
                  <option>PhueKhet</option>
                  <option>Pattaya</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" name="zip" class="form-control" id="zip" placeholder="90001" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
            <label for="zip">City</label>
                <input type="text" name="city" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
        </div>
                <div class="col-md-6 mb-3">
                <label for="zip">Phone</label>
                <input type="text" name="phone" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
        </div>
</div>
                      


                        <br>

                        
                        <input type="submit" name="submit" value="Save Address" class="btn btn-dark btn-lg btn-block" >
                        
                        

                        </form>
                        </div> <!-- panel-body -->
                        <br><br>
                        <hr>
              <!-- --------------------Shipping address show start -------------- -->
                         <div class="row">

                <?php
                $email = $_SESSION['email'];
                $query = "SELECT * FROM shipping WHERE shipping_type= 'home'
                         and email = '$email' ORDER BY shipping_id DESC";
                $result = mysqli_query($mysqli,$query);
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row['shipping_id'];
                ?>
     
                      
                <div class="col-md-4" style="margin-bottom: 8px">
                <div class="ship">
                <table class="table">
                <input type="hidden" value="<?php echo $row['shipping_id'] ?>">
                 <tr>
                  <td>Name</td>
                  <td><small><?php echo $row['full_name'] ?></small></td>
                 </tr>
                  <tr>
                  <td>Address</td>
                  <td><small><?php echo $row['street_address'] ?></small></td>
                 </tr>
                 <tr>
                  <td>Phone</td>
                  <td><small><?php echo $row['phone'] ?></small></td>
                 </tr>
                  <tr>
                  <td>City,Country</td>
                  <td><small><?php echo $row['city'] ?>,<?php echo $row['state'] ?><br>,In <?php echo $row['country'] ?></small></td>
                 </tr>
                </table>
              
                </div>
                
                <br>
                <a href="payment_info.php?id=<?php echo $row['shipping_id'] ?>" class="btn btn-dark" style="margin: 0px 0px">Deliver to this address</a><br>
               
                <tr>  
                       <td> <a href="shipping_edit.php?id=<?php echo $row['shipping_id'] ?>" class="btn btn-default" style="margin-top: 4px; margin-left: 35px; text-decoration: underline;">Edit</a></td>
                       <td><a class='btn btn-default' href='shipping_del_ajaxfile.php?id=<?php echo $row['shipping_id'] ?>' style="margin-top: 4px; margin-right: 25px; text-decoration: underline;" >Delete</a></td>
                       
                    </tr>             
                </div>
                <?php } ?>
                
                </div><br><br>

                <!-- --------------------Shipping address show end -------------- -->

                        </div><!-- {{--  col-md-8 order-md-1 end --}} -->

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
   <div class="coupon_fr" >

    <div class="coupon_in">
        <table class="table">
            <tr>
                <td>
                <a class="btn btn-link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="color: #000;">
                    <b>PROMO CODE</b>
                </a>
                </td>
                <td>
                    <a class="btn btn-link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" style="color: #000;">
                    <i class="fa fa-chevron-down"></i> </a>
                </td>
            </tr>
        </table>
        <div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        <form method="post" action="">
            
            <input type="text" name="coupon_code" class="form-control" placeholder="CODES ARE CASE-SENSITIVE">
            <p style="font-size: 12px; color: grey;">Casing and hyphens need to be exact</p>

            <button type="submit" class="btn btn-dark btn-lg btn-block">Apply <i class="fa fa-arrow-right" style="margin-left: 35px;"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
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
                        </div>
                        
                         
                           
                        

                        
                  
                      
	 
		</div><!--  col-md-8 end -->
		     



<br><br><br>
<?php include('002footer.php'); ?>

<script src='jquery-3.3.1.js' type='text/javascript'></script>
<script src='bootbox.min.js'></script>
<script src='shipping_del_script.js' type='text/javascript'></script>

</body>
</html>

