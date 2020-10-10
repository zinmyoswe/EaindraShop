<?php
  session_start();
    include('confs/config.php');
     include "header3.php";
	$id = $_GET['id'];
	$result = mysqli_query($mysqli,"SELECT * FROM purchase WHERE purchase_id=$id ");
	$row = mysqli_fetch_assoc($result);
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Purchase Edit
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Purchase Edit page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
      <div class="col-md-9">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Purchase Edit</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="card-body">




	<form action="purchase-update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['purchase_id']?>">

    <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" value="<?php echo $row['product_name'] ?>"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

    <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Supplier</label>
                  <div class="col-sm-10">
                  <select id="supplier" class="form-control" name="supplier">
                     <option>Select a Supplier</option>
                      <?php 
                        $supplier = mysqli_query($mysqli,"SELECT supplier_id,supplier_name FROM supplier");
                        while($sup = mysqli_fetch_assoc($supplier)):
                      ?>    
                      <option value="<?php echo $sup['supplier_id'] ?>"
                        <?php if($sup['supplier_id'] == $row['supplier_id']) echo "selected" ?>>
                       <?php echo $sup['supplier_name'] ?>
                      </option> 
                      <?php endwhile; ?>        
                                          </select>  
                                           
                  </div>
                </div>
                <!-- FORM ENDS -->

             <?php 
                  include('confs/config.php');
                     $admin = $_SESSION['email'];
                   $c = "SELECT * FROM admin WHERE admin_email = '$admin'";
                    $r = mysqli_query($mysqli,$c);
                    $row2 =mysqli_fetch_assoc($r);
                    $admin_id = $row2['admin_id'];
                    $role = $row2['role'];        
                ?>
                <input type="hidden" name="admin_id" value="<?php echo $admin_id ?>"> 



                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
                  <div class="col-sm-10">
                  <input type="text" name="price"  class="form-control" id="inputEmail3" value="<?php echo $row['price'] ?>"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-sm-10">
                  <input type="text" name="qty"  class="form-control" id="inputEmail3" value="<?php echo $row['qty'] ?>"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->



		<br><br>

		<input type="submit" value="Update Purchase" class="btn btn-primary float-right">
    <a href="purchase-list2.php" class="btn btn-outline-dark float-right" style="margin-right: 2px;">Back</a>
	</form>


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

<?php include('footer3.php'); ?>