<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
  session_start();
  error_reporting(0);
  include('confs/config.php');
  include('001header.php');
  include('004navbar.php');

?>



<script src="js/vendor/modernizr.js"></script>

<br><br>
  <div class="container">

<!-- {{-- ----------------------------- ROW CART START ----------------------------- --}} -->
<div class="row">
   <div class="col-lg-9 col-sm-6 col-xs-12">

   
        <a href="index.php" style="color: black;">Home</a>
        /
        <span>Shopping Cart</span>
   

   
    <h2>YOUR BAG <span class="title_cartpage"><?php echo $itemqty?> ITEMS </span></h2> 

    
    <!-- {{-- success error msg start --}} -->
   
   
    
    <br>

        <?php
           
           $product_attribute = $_SESSION['product_attribute'];

          if(isset($_SESSION['cart'])) {

            $total = 0;
            $itemqty = 0;
            
          
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = "SELECT  product_name, qty, price,cover FROM product WHERE id = $product_id";
            $run = mysqli_query($mysqli,$result);

            $email=$_SESSION['email'];


            

            if($run){

              while($obj = mysqli_fetch_object($run)) {
                $cost = $obj->price * $quantity; //work out the line cost

                $total = $total + $cost; //add to the total cost
                $itemqty = $itemqty+$quantity;

                $taxRate=5;
                $tax=$total*$taxRate/100;
                $finaltotal=$total+$tax; 

                $color = $_SESSION['color'];
                $size = $_SESSION['size'];

                // print_r($color); 

                $result_c = mysqli_query($mysqli,"SELECT * FROM attribute where attr_id='$color'");
                 $row_c = mysqli_fetch_assoc($result_c);
                 $attr = $row_c['attr_id'];
                 $attr_img = $row_c['attr_img'];
                 $value_c = $row_c['value'];

                 $result_s = mysqli_query($mysqli,"SELECT * FROM attribute where attr_id='$size'");
                 $row_s = mysqli_fetch_assoc($result_s);
                 $attr = $row_s['attr_id'];
                 $value_s = $row_s['value'];

             
                  $result_cart = mysqli_query($mysqli,"SELECT * FROM cart c
                   LEFT JOIN product p 
                   ON p.id = c.product_id
                   LEFT JOIN attribute a
                   ON c.color = a.attr_id
                    where c.product_id='$product_id'");
                 $row_cart = mysqli_fetch_assoc($result_cart);
                 $cart_id = $row_cart['cart_id'];
                  $col = $row_cart['color'];
                  $siz = $row_cart['size'];
                  $pp_id = $row_cart['product_id'];

                  //GET Discount
                  $sql_dis = mysqli_query($mysqli,"SELECT * FROM discount 
                            LEFT JOIN product ON discount.product_id = product.id
                            WHERE product.id = '$product_id'");
                          $result_dis = mysqli_fetch_assoc($sql_dis);
                           $percentage = $result_dis['percentage'];
                           $discount_id = $result_dis['discount_id'];



                
                echo '  
                <div class="container cart_item">
                <div class="row">
                ';
                echo '
                <div class="col-lg-2">
                <img src="admin/cover/'.$obj->cover.'" class="img_cartpage">
                </div>
                ';
                
                echo '
                 <div class="col-lg-5" >
                <a href="" class="cart_a">'.$obj->product_name.'</a>';
             

                if($pp_id == 0){
                   echo '<p class="cart_p">Color: '.$value_c.' <br>';
                echo 'Size: '.$value_s.'   <b style="margin-left: 7px;">In Stock</b> <i class="far fa fa-check"></i></p>
                   ';
                }else{

                echo '<p class="cart_p">Color: '.$col.' <br>';
                echo 'Size: '.$siz.'   <b style="margin-left: 7px;">In Stock</b> <i class="far fa fa-check"></i></p>
                   ';
              }

                echo '<p>';
                echo '<a href="" class="btn btn-link">Edit</a>';
                echo '<a href="delete-cart-detail.php?id='.$product_id.'" 
                class="btn btn-link">Delete</a>';
                 echo '<a href="" class="btn btn-link">Move To Wishlist</a>';
                echo '</p>';
              
       
                echo '</div>';
                echo '<div class="col-lg-2">';
               
                echo ''.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a>
                  </div>';

                echo '<div class="col-lg-1"></div>';
                echo '<div class="col-lg-2">';
                if( $discount_id == 0){
                   echo '<b>US$'.$cost.'</b>';
                }else{

                  $selling_price = $obj->price-($obj->price*($percentage/100));
                   $selling_dis = $selling_price * $quantity;
                echo '<td><b>US$ '.$selling_dis.'</b><strong class="price_dis"> US$'.$cost.'</strong></td>';
                 }
                
                echo '</div>';
                echo '</div>
        </div>
        <hr>';
              }

              if($email == 0){
                   $sql2 = "INSERT INTO cart(customer,product_id,color,size,created_date)
                   VALUES('guest','$product_id','$value_c','$value_s',NOW())";

              $run2=mysqli_query($mysqli,$sql2);
              }else{
                   $sql2 = "INSERT INTO cart(customer,product_id,color,size,created_date)
                   VALUES('$email','$product_id','$value_c','$value_s',NOW())";

              $run2=mysqli_query($mysqli,$sql2);
              }

             
            }

          }
          
          echo '
        <div class="row">
            <div class="col-md-9">';

          echo '
          <a href="delete-cart.php" class="button alert">Empty Cart</a>';

          echo '
          <a href="product.php" style="margin-right: 8px">Continue Shopping</a>
          <a href="checkout.php" class="btn btn-dark">Checkout <i class="fa fa-arrow-right" style="width: 60px;"></i></a>';

          echo ' </div>
            <div class="col-md-3">';

          echo '<p>Subtotal : $'.$total.'</p>';

          echo '<p>Qty : '.$itemqty.'</p>';
          echo '<p>Tax(5%) : $'.$tax.'</p>';
          echo '<p><b>Total :  $'.$finaltotal.'</b></p>';

      

        
          

          // if(isset($_SESSION['username'])) {
            // echo '<a href="order-update.php"><button  class="btn btn-info pull-right">Order</button></a>';

          echo '</div>
        </div>';
        
        }

        else {
          echo "<div class='alert alert-dark'><span class='fa fa-exclamation'> You have no items in your shopping cart</span></div><br>
          <a href='product.php' style='margin-right: 8px' class='btn btn-dark'>Continue Shopping</a>
          ";
        }





        
          ?>
      </div> <!-- col-lg-9 col-sm-6 col-xs-12 end -->
      <div class="col-lg-3 col-sm-6 col-xs-12">
         <div class="cart_sidebar">
                <br>
                <a href="checkout.php" class="btn btn-dark btn-lg btn-block" style=" margin-right: :4px;">Checkout <i class="fa fa-arrow-right" style="margin-left: 35px;"></i></a>
                <p class="text-center" style="padding: 7px;">By placing your order, you agree to <br>the Delivery Terms</p>

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
       
    </div>
    <!-- col-lg-3 col-sm-6 col-xs-12 end -->
  </div>
</div>
    


    





    
        



  


    <br><br><br>
<?php include('002footer.php'); ?>



    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>