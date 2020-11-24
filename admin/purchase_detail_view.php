<?php 

session_start(); 
include('confs/config.php');
include('header3.php');

$id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM purchase_detail

    where purchase_id = $id");



?>

<style type="text/css">
     .modal-dialog{
            margin-top: 250px;
        }
        .btn-secondary {
    color: #fff;
    background-color: black;
    border-color: black;
}
</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Purchase</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Purchase Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
      <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Purchase Detail List</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="card-body">

     
    

            <table class='table' >
                <tr style='background: whitesmoke;'>
                    <th>No</th>
    <th>ProductName</th>
    <th>Color</th>
    <th>Price</th>
    <th>Qty</th>
    
    <th>Total</th>

    <th></th>
                </tr>

                <?php    while($row = mysqli_fetch_assoc($result)): 
                	$id = $row['purchase_detail_id'];
                ?>
                <tr>
                	<td><?php echo $row['purchase_detail_id']?></td>
                	<td><?php echo $row['product_name']?></td>
                	<td><?php echo $row['color']?></td>
                	<td><p style="font-family: arial">$<?php echo $row['price']?></p></td>
                	<td><?php echo $row['qty']?></td>
                	<td><p style="font-family: arial">$<?php echo $row['total']?></p></td>

                	<td>
                		<button class='delete btn btn-outline-dark' id='del_<?= $id ?>' data-id='<?= $id ?>'>Delete</button>
                	</td>
                </tr>

            <?php endwhile ?>

            <tr>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td></td>
            	<td>
            		Qty   :<br>
            		TOTAL :
            	</td>
            	<td>
            		<?php
            		    include('confs/config.php');
            			$id = $_GET['id'];
   						$result2 = mysqli_query($mysqli,"SELECT * FROM purchase

    					where purchase_id = $id");
    					$row2 = mysqli_fetch_assoc($result2);
            		?>
                    <b><?php echo $row2['qty']?> </b><br>
            		<b style="font-family: arial">$<?php echo $row2['total']?> </b>
            	</td>
            	<td></td>
            </tr>
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
        <script src='script-purchase-detail.js' type='text/javascript'></script>
   

   <?php include('footer3.php'); ?>