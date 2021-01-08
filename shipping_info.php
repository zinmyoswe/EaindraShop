<?php include('001header.php'); ?>
<?php include('004navbar.php'); ?>
<?php
  error_reporting(0);
  session_start();
  include('confs/config.php');
  $email = $_SESSION['email'];
  
  $s = $_GET['s'];

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
   margin-right: 40px;
}

.tive{

   border-bottom: 2px solid black;
}
.error{
  color: red;
}
    </style>

    <?php if($s == 'gxio29ak'){ ?>
<script   src="https://code.jquery.com/jquery-3.3.1.min.js"   integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <script type="text/javascript">
            
            const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'info',
  title: 'Login successfully'
}).then(function() {
            window.location = "checkout.php";
        });
 </script>
<?php } ?>
<!-- ---------------------------------Shipping Page end -------------------------- -->

<!-- font -->


<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> 
<!-- <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script> -->
<script type="text/javascript" src="validation.min.js"></script>
<!-- additional method -->
<!-- <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script> -->
<script type="text/javascript" src="shipping_script2.js"></script>



<!--  ==================login form ======================== -->
<br>
 <div class="container">
<span class="badge badge-pill badge-dark">1</span> <b class="tag-eain"><a href="cart.php">BAG</a></b>
   <span class="badge badge-pill badge-dark">2</span> <b class="tag-eain tive"><a href="" disabled>DELIVERY</a></b>
   <span class="badge badge-pill badge-secondary ">3</span> <b class="tag-eain text-secondary">PAYMENT</b>
   <span class="badge badge-pill badge-secondary">4</span> 
   <b class="tag-eain text-secondary ">ORDER COMPLETE</b>
   <hr>
        <br><br>
    <h2>DELIVERY METHOD</h2>
    <p class="lead">Free Shipping and Free Returns</p>

    <hr>

    <div class="row">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">SHIPPING ADDRESS</h4>

        <!-- {{-- success error msg start --}} -->
    

        <!-- {{-- success error msg end --}} -->
<!-- 
		<script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
<?php
        session_start();
        include('confs/config.php');
        $nameErr = $streetErr = $countryErr ="";
        $stateErr = $zipErr = $cityErr= $phoneErr ="";
        if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $street = $_POST['street'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        
  if (empty($_POST["name"])) {

    $nameErr = "Please enter your name";
  } 

   if (empty($_POST["street"])) {        
    $streetErr = "Please enter your address";
  } 

  if (empty($_POST["country"])) {        
    $countryErr = "Please choose country";
  } 

  if (empty($_POST["state"])) {        
    $stateErr = "Please choose state";
  } 
  
   if (empty($_POST["zip"])) {

    $zipErr = "Please enter zip code";
  } 

  if (empty($_POST["city"])) {

    $cityErr = "Please enter your city";
  } 

  if (empty($_POST["phone"])) {

    $phoneErr = "Please enter Phone No";
  } 
  else{

        

        $sql = "INSERT INTO shipping(full_name,email,store_id,phone,status,shipping_type,street_address,country,state,city,zipcode,created_date,modified_date,shipping_time)
                VALUES('$name','$email',0,'$phone','register','home','$street','$country','$state','$city','$zip',NOW(),NOW(),NOW())";

               // if($sql){
               //  // echo "<script>alert('success')</script>";
               //  echo "$sql";
               // }else{
               //  // echo "<script>alert('error')</script>";
               // }


              $run = mysqli_query($mysqli,$sql);

       
          if($run){
       $query = "SELECT * FROM shipping WHERE email = '$email' ORDER BY shipping_id DESC LIMIT 0,1";
                $result = mysqli_query($mysqli,$query);
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row['shipping_id'];
    echo "<script>window.location='payment_info.php?id=$id'</script>";
  }
}
}


}
?>
  
              <div class="panel-body">
                        <form method="post" action="checkout.php">

                        <div class="mb-3">
                           <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" readonly>
                        </div>
                        
                        <div class="mb-3">
                         <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="" value="" >
                        </div>
                        
                        <p class="error"><?php echo $nameErr;?></p>
                        
  
                        <div class="mb-3">
                        <label for="street">Address</label>
                        <input type="text" name="street" class="form-control" id="street" placeholder="" value="" >
                        </div>

                        <p class="error"><?php echo $streetErr;?></p>
                        
                      <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select name="country" class="custom-select d-block w-100" id="country">
                  <option value="">Choose...</option>
                  <option>Myanmar</option>
                  <option>Thailand</option>
                  <option>China</option>
                  <option>India</option>
                  <option>Japan</option>
                  <option>Korea</option>
                  
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
                 <p class="error"><?php echo $countryErr;?></p>
              </div>

              
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select name="state" class="custom-select d-block w-100" id="state">
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
                <p class="error"><?php echo $stateErr;?></p>
              </div>

              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" name="zip" class="form-control" id="zip" placeholder="90001">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
                <p class="error"><?php echo $zipErr;?></p>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
            <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
                <p class="error"><?php echo $cityErr;?></p>
                
        </div>
                <div class="col-md-6 mb-3">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
                <p class="error"><?php echo $phoneErr;?></p>
        </div>
</div>
                      


                        <br>

                        
                        <button type="submit" name="submit" id="submit" value="Save Address" class="btn btn-dark btn-lg btn-block" >Save Address</button>
                        
                        

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


