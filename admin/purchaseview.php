<?php 
    session_start();
error_reporting(0);
include('confs/config.php');
include('header3.php');
?>
<?php
	if(isset($_POST['search'])){
		$fDate = $_POST['fDate'];
		$tDate = $_POST['tDate'];
		$fromdate = date('Y-m-d',strtotime($fDate));
		$todate = date('Y-m-d',strtotime($tDate));
		$sql = "SELECT p.*,s.supplier_id, s.supplier_name,a.admin_id, a.admin_name 
		FROM purchase p
		LEFT JOIN supplier s
		ON s.supplier_id = p.supplier_id
		LEFT JOIN admin a
		ON p.admin_id = a.admin_id
		WHERE p.created_date Between '$fromdate' and '$todate'
		ORDER BY p.created_date ASC";
		
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
            <h1>Purchase View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home2.php">Home</a></li>
              <li class="breadcrumb-item active">Purchase Page</li>
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
          <h3 class="card-title">Purchase Report</h3>

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
	<form method="post" action="purchaseview.php">
		<tr>
			<td align="right">From Date</td>
			<td><input type="text" name="fDate" value="<?php echo date("Y-m-j") ?>" class="form-control"></td>

			<td align="right">To Date</td>
			<td><input type="text" name="tDate" value="<?php echo date("Y-m-j") ?>" class="form-control"></td>
			<td><input type="submit" name="search" value="Filter" class="btn btn-primary"></td>
		</tr>
	</form>


	
	<tr>
	<div class="bin">
		<td><img src="../image/e.jpg" width="180" ></td>

		<td>	
			<h3><b>EaindraShop</b></h3><br>
	From Date : <?php echo "$fromdate"; ?><br>
	To Date : <?php echo "$todate"; ?>
		</td>
		
	</tr>
	
	</table>
	<table class="table table-bordered">
	<tr>
		<th><b>PurchaseID</b></th>
		<th><b>ProductName</b></th>
		<th><b>SupplierID</b></th>
		<th><b>AdminID</b></th>
		<th><b>Price</b></th>
		<th><b>Qty</b></th>
		<th><b>Date</b></th>
	</tr>
	
	<?php while($row = mysqli_fetch_assoc($run)): ?>
		<tr>
		
			<td><?php echo $row['purchase_id'] ?></td>
			
			<td><?php echo $row['product_name'] ?></td>
			<td><?php echo $row['supplier_name'] ?></td>
			<td><?php echo $row['admin_name'] ?></td>
			<td><p style="font-family: Arial;">$ <?php echo $row['price'] ?></p></td>
			<td><?php echo $row['qty'] ?></td>
			<td><?php echo $row['created_date'] ?></td>
		
		</tr>
	<?php endwhile; ?>
	<!-- <td colspan="7">
		
	</td> -->
</table>

</div>
	</div>
</div><!--  container end -->


</div>
        <!-- /.card-body -->
        <div class="card-footer">
          	<form action="excelExporter2.php" method="post">
          		<input type="hidden" name="fromdate" value="<?php echo "$fromdate"; ?>">
          		<input type="hidden" name="todate" value="<?php echo "$todate"; ?>">
			  <button type="submit" class="btn btn-dark float-right" id="export_data" name='export_data'>Export with Excel</button>
			  <a href="home2.php" title="" class="btn btn-outline-primary float-right" style="margin-right: 4px;">Back</a>
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
