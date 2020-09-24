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
            <h1>Manage Pending Order</h1>
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
        <div class="col-md-11">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Waiting Payment List</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        	<table class="table  table-bordered">
    		<tr>
    			<th>OrderID</th>
    			<th>Status</th>
    			<th>Amount</th>
    			<th>Quantity</th>
    			<th>OrderDate</th>
    			<th></th>
    		</tr>
        <?php
        while ($row = mysqli_fetch_assoc($run)):
        	$status = $row['status'];
        ?>
    
    		<tr>
    			<td><?php echo $row['order_id'] ?></td>
    			<td>
    			<?php if($status == 2) {
    				echo "<span class='badge badge-pill badge-warning'>Waiting Payment</span>";
    			} ?>
    			</td>
    			<td><h5 style="font-family: arial; font-size: 16px;">$ <?php echo $row['total_amt'] ?></h5></td>
    			<td><?php echo $row['total_qty'] ?></td>
    			<td><?php echo $row['created_date'] ?></td>
    			<td><a href="order_pending_detail.php?id=<?php echo $row['order_id'] ?>" class="btn btn-outline-primary">Detail</a></td>
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