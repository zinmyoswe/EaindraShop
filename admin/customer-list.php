<?php 
    session_start(); 
    error_reporting(0);
    include('confs/config.php');
    include "header3.php";

  $id = $_GET['id'];
  $c = "SELECT * FROM customer WHERE id = '$id'";
  $r = mysqli_query($mysqli,$c);
  $row_c =mysqli_fetch_assoc($r);
  $customer_id = $row_c['id'];
  $customer_email = $row_c['email'];



  $sql = "SELECT * FROM orders WHERE customer = '$customer_email' ORDER BY order_id DESC";
  $run = mysqli_query($mysqli,$sql);
  $count = mysqli_num_rows($run);

    
?>



     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    </head>






<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home2.php">Home</a></li>
              <li class="breadcrumb-item"><a href="customer-list2.php">Customer Page</a></li>
              <li class="breadcrumb-item active">Customer Order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
      <div class="col-md-11">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Customer List</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="card-body">

          
        <br><br>

         <h4 style="text-align: center;">All Order Detail</h4>
      Total Orders : <span class="badge badge-dark"><?php echo $count ?></span>
       <table class="table">
        <tr>
          <th>OrderID</th>
          <th>Total Amount</th>
          <th>Total Qty</th>
          <th>Payment Type</th>
          <th>Status</th>
          <th>Order Time</th>
          <th></th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($run)): 
          $status = $row['status'];
        ?>
        <tr>
          <td>ORD_<?php echo $row['order_id'] ?></td>
          <td>US$<?php echo $row['total_amt'] ?></td>
          <td><?php echo $row['total_qty'] ?></td>
          <td><?php echo $row['payment_type'] ?></td>
          <td>
            <?php if($status == 2) { ?>
            <span class="badge badge-pill badge-warning">UnPaid</span>
           
                <?php } else if($status == 3){ ?>
                  <span class="badge badge-pill badge-info">Paid</span>

                    <?php } else if($status == 4){ ?>
                  <span class="badge badge-pill badge-light">Shipping</span>
               
                <?php }else{  ?>
                 <span class="badge badge-pill badge-dark"> Delivered</span>
                <?php  }?>
          </td>
          <td><span class="far fa-clock"></span> <?php echo $row['created_date'] ?></td>
          <td>
            <a href="order_detail.php?id=<?php echo $row['order_id'] ?>">Detail</a>
          </td>
        </tr>
      <?php endwhile ; ?>
      </table>

        </div>
        <!-- /.box-body -->
       
        <div class="card-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
       </div> <!--  col-md-5 end -->

        
    </div> <!-- row ends -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


           <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 4 dependency -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
        <script src='script-customer.js' type='text/javascript'></script>
   

   <?php include('footer3.php'); ?>