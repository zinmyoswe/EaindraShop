<?php
  session_start();
  error_reporting(0);
  include('confs/config.php');
  // include('function/function.php');
  
  include('001header.php');
  include('004navbar.php');
  $customer = $_SESSION['email']; 

  
  
  $c = "SELECT * FROM customer WHERE email = '$customer'";
  $r = mysqli_query($mysqli,$c);
  $row_c =mysqli_fetch_assoc($r);
  $customer_id = $row_c['id'];



  $order_id = $_GET['id'];
  $sql = "SELECT * FROM orders WHERE customer = '$customer' and order_id ='$order_id'";
  $run = mysqli_query($mysqli,$sql);
  $count = mysqli_num_rows($run);


  $sql2 = "SELECT * FROM add_to_favourite WHERE customer_id='$customer_id'";
  $run2 =mysqli_query($mysqli,$sql2);
  $count_fav = mysqli_num_rows($run2);


  
?>
<style type="text/css">
  /*sidebar*/
.dash {
  list-style: none;
  padding: 0;
}

a{
  color: black;
}

</style>
<br>
 <div class="container">
   <div class="row">
  
     <div class="col-md-9">
      <h4 style="text-align: center;"><b><?php echo $row_c['name'] ?>'s</b> Order Detail</h4>
      <br>
       <?php while($row = mysqli_fetch_assoc($run)): 
          $status = $row['status'];
        ?>
      
       <table class="table">
        <tr>
          <th>
            <b>ORDER_ID </b> : ORD_<?php echo $row['order_id'] ?><br>
            <b>Payment Type </b> : <?php echo $row['payment_type'] ?><br>
            <b>Status </b> :<?php if($status == 2) { ?>
            <span class="badge badge-pill badge-warning">UnPaid</span>
           
                <?php } else if($status == 3){ ?>
                  <span class="badge badge-pill badge-info">Paid</span>

                    <?php } else if($status == 4){ ?>
                  <span class="badge badge-pill badge-light">Shipping</span>
               
                <?php }else{  ?>
                 <span class="badge badge-pill badge-dark"> Delivered</span>
                <?php  }?><br>
          </th>
          <th></th>
          <th></th>
         
          <th colspan="2">
            <span class="far fa-clock"></span> <?php echo $row['created_date'] ?>
          </th>
        <tr>
        <tr>
          <th>Product</th>
          <th>Product Name</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Amount</th>
        </tr>
     
                 <?php
            include('confs/config.php');
            $order_id = $_GET['id'];
            $items = mysqli_query($mysqli,"Select oi.*, p.product_name, p.cover 
              from order_items oi
              left join product p 
              on oi.product_id = p.id
              where oi.order_id = $order_id");

            while($item=mysqli_fetch_assoc($items)):
        ?>  
        <tr>
          <td><img src="admin/cover/<?php echo $item['cover']; ?>" width="110" height="135"/></td>
            <td><b><?php echo $item['product_name'] ?></b></td>
          <td><?php echo $item['units'] ?></td>
          <td>US$<?php echo $item['price'] ?></td>
          <td><b>US$<?php echo $item['total'] ?></b></td>
             </tr>
      <?php endwhile ?>
         
      
     

        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><b>Total </b> : US$<?php echo $row['total_amt'] ?><br>
          <b>Total Quantity</b> :<?php echo $row['total_qty'] ?><br></td>
          
        </tr>
      <?php endwhile ; ?>

     
      </table>
     </div> <!-- col-md-8 end-->
        <div class="col-md-3">

        
       <ul class="dash">
        <li>
            <b><a href="index.php">DashBoard</a></b>
          </li>
          <li><a href='myorder.php'>My Order<span class='badge badge-warning' style='margin-left: 8px;'><?php echo $count ?></a></li>
          <li><a href='dashboard.php'>Favourite Items<span class='label label-danger' style='margin-left: 8px;'><?php echo $count_fav ?></a></li>
        </ul><br><br>
        <hr>
         <ul class="dash">
        <li>
            <b><a href="index.php">Account Options</a></b>
          </li>
          <li><a href=''>View Profile</a></li>
          <li><a href=''>Edit Profile</a></li>
          <li><a href=''>Logout</a></li>
        </ul><br><br>

        <hr>
         <ul class="dash">
        <li>
            <b><a href="index.php">Account Info</a></b>
          </li>
          <table>
            
          </table>
          <li><?php echo $row_c['name'] ?></li>
          <li><?php echo $row_c['email'] ?></li>
          <li><?php echo $customer_id ?></li>
          <li>Member Since : </li>
          <li>Last Login : </li>
        </ul><br><br>
     
   



     </div> <!-- col-md-4 end-->
   </div>
 </div>

 <?php   include('002footer.php'); ?>




  
