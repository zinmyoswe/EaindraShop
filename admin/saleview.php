<?php 
error_reporting(0);
include('../confs/config.php');
include('header3.php');
?>
<?php
	if(isset($_POST['search'])){
		$fDate = $_POST['fDate'];
		$tDate = $_POST['tDate'];
		$fromdate = date('Y-m-d',strtotime($fDate));
		$todate = date('Y-m-d',strtotime($tDate));
		$sql = "SELECT * FROM orders 
		WHERE created_date Between '$fromdate' and '$todate'
		ORDER BY created_date ASC";
		
	}else{
		
	}

	$run = mysqli_query($mysqli,$sql);

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sale View</h1>
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
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">

<div class="container">
	<div class="row">
		<div class="col-md-12">
<table class="table">
	<form method="post" action="saleview.php">
		<tr>
			<td align="right">From Date</td>
			<td><input type="text" name="fDate" value="<?php echo date("Y-m-j") ?>" class="form-control"></td>

			<td align="right">To Date</td>
			<td><input type="text" name="tDate" value="<?php echo date("Y-m-j") ?>" class="form-control"></td>
			<td><input type="submit" name="search" value="Filter" class="btn btn-warning"></td>
		</tr>
	</form>

	
	<tr>
	<div class="bin">
		<td><img src="../image/s-logo.png" width="180" height="150"></td>
		<td>	
			<h3><b>SPORT STORE</b></h3><br>
	From Date : <?php echo "$fromdate"; ?><br>
	To Date : <?php echo "$todate"; ?>
		</td>
		
	</tr>
	
	</table>
	<table class="table table-bordered">
	<tr>
		<th><b>OrderID</b></th>
		<th><b>Name</b></th>
		<th><b>Total_amt</b></th>
		<th><b>Total_qty</b></th>
		<th><b>Time</b></th>
	</tr>
	
	<?php while($row = mysqli_fetch_assoc($run)): ?>
		<tr>
		
			<td><?php echo $row['order_id'] ?></td>
			
			<td><?php echo $row['customer'] ?></td>
			<td><p style="font-family: Arial;">$ <?php echo $row['total_amt'] ?></p></td>
			<td><?php echo $row['total_qty'] ?></td>
			<td><?php echo $row['created_date'] ?></td>
		
		</tr>
	<?php endwhile; ?>
	<td colspan="4">
		<form action="excelExporter.php" method="post">
			
		</form>
	</td>
</table>

</div>
	</div>
</div><!--  container end -->


</div>
        <!-- /.card-body -->
        <div class="card-footer">
          	<form action="excelExporter.php" method="post">
			  <button type="submit" class="btn btn-primary">Print</button>
		</form>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php include('footer3.php') ?>
