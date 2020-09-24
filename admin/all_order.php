<?php 
include('../confs/config.php');
include('header3.php'); 
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage All Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
     

        <!-- Default box -->
        <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">View All Orders</h3>


          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <?php 
        include('../confs/config.php');
          $sql = "SELECT * FROM orders ORDER BY order_id DESC";
          $run = mysqli_query($mysqli,$sql);
          $count = mysqli_num_rows($run);       
        ?>
        	<table class="table  table-bordered">
    		<tr>
    			<th>OrderID</th>
    			<th>Status</th>
    			<th>Amount</th>
    			<th>Quantity</th>
          <th>PaymentType</th>
    			<th>OrderDate</th>
          <th>Customer</th>
    			<th></th>
    		</tr>
        <?php
        while ($row = mysqli_fetch_assoc($run)):
        	$status = $row['status'];
        ?>
    
    		<tr>
    			<td><?php echo $row['order_id'] ?></td>
    			<td>
    			<?php if($status == 2) { ?>
    				<span class='badge badge-warning'>Waiting Payment</span>
    			 
          <?php } else if($status == 3){ ?>
            <span class='badge badge-primary'>Received Payment</span>

              <?php } else if($status == 4){ ?>
            <span class='badge badge-success'>Shipping</span>
         
          <?php }else{  ?>
            <span class='badge badge-dark'>Delivered</span>
          <?php  }?>


          
    			</td>
    			<td><h5 style="font-family: arial; font-size: 16px;">$ <?php echo $row['total_amt'] ?></h5></td>
    			<td><span class='label bg-red'><?php echo $row['total_qty'] ?></span></td>
            <td>
            <!-- payemnt info -->
            <h5><?php echo $row['payment_type']; ?></h5>
          </td>
    			<td>
         <?php
         // include('function/function.php');
         // echo get_time_ago( strtotime($row['created_date']) );
      
         ?><br>
            <?php echo $row['created_date']; ?></td>
            <td><?php echo $row['customer']; ?></td>
        

          <?php if($status == 3) { ?>
    			<td><a class="btn btn-block btn-danger btn-flat" href="shipping_confirm.php?id=<?php echo $row['order_id'] ?>" 
          >Confirm Shipping <span class="fa fa-angle-double-right"></span></a></td>

          <?php } else if($status == 2){ ?>
            <td><a class="btn btn-block btn-primary btn-flat" href="order_pending_detail.php?id=<?php echo $row['order_id'] ?>">Confirm Receive Payment <span class="fa fa-angle-double-right"></span></a></td>

          <?php } else if($status == 4){ ?>
             <td><a class="btn btn-block btn-dark btn-flat" href="deliver_confirm.php?id=<?php echo $row['order_id'] ?>">Confirm Delivered <span class="fa fa-angle-double-right"></span></a></td>
         
          <?php }else{  ?>
               <td><a class="btn btn-block btn-outline-success btn-flat" href="all_order.php"><span class="fa fa-check"></span> Complete </a></td>
          <?php  }?>
    		</tr>
    	
    	<?php endwhile; ?>
    	</table>
        </div>
        <!-- /.box-body -->
        <div class="card-footer">
dsafds
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
      </div> <!-- col-md-4 end -->
    </div> <!-- row ends -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
<?php include('footer3.php'); ?>