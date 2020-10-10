<?php 

session_start(); 
include('confs/config.php');
include('header3.php');
?>



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Purchase</h1>
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
        <div class="col-md-9">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">New Purchase Registration</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>


        </div>
        <div class="box-body">
                 <?php
          if(isset($_POST['cat'])){
            $name = $_POST['name'];
            $supplier = $_POST['supplier'];
            $product = $_POST['product'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
  
            if($name == null){
                  echo '  <div class="alert alert-danger">
        <i class="fa fa-exclamation-triangle"> </i> Categories Name Required!
        </div>';
                }else{
      $query = $mysqli->query("INSERT INTO purchase(product_name,supplier_id,admin_id,product_id,price,qty,created_date,modified_date)
      VALUES ('$name','$supplier','$admin_id','$product','$price','$qty',NOW(),NOW())");
          ?>
      

          <?php
               
                

             if($query){

                
  
        echo "<script>window.open('purchase_list2.php?w2=success','_self')</script>";
                  }
                }
                }

      
          ?>


          <form method="post" action="" enctype="multipart/form-data">
<!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="Categoryname"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                  <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Supplier</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="supplier">
                                                <option>Select a supplier</option>
                                               <?php
                                                include('confs/config.php');
                                                $get_brand = "SELECT * FROM supplier";
                                                $run_brand = mysqli_query($mysqli,$get_brand);
                                                while($row_brand= mysqli_fetch_array($run_brand)){
                                                  $brand_id = $row_brand['supplier_id'];
                                                  $brand_title = $row_brand['supplier_name'];

                                                  echo "
                                                    <option value='$brand_id'>$brand_title</option>
                                                  ";
                                                }
                                                ?>
                                          </select> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                <?php 
                  include('confs/config.php');
                     $admin = $_SESSION['email'];
                   $c = "SELECT * FROM admin WHERE admin_email = '$admin'";
                    $r = mysqli_query($mysqli,$c);
                    $row =mysqli_fetch_assoc($r);
                    $admin_id = $row['admin_id'];
                    $role = $row['role'];        
                ?>
                <input type="hidden" name="supplier" value="<?php echo $admin_id ?>">

                <input type="hidden" name="product" value="0">

                     <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
                  <div class="col-sm-10">
                  <input type="text" name="price"  class="form-control" id="inputEmail3" placeholder="Price"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                 <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                  <div class="col-sm-10">
                  <input type="text" name="qty"  class="form-control" id="inputEmail3" placeholder="Qty"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                
  <br><br>
  
        </div>
        <!-- /.box-body -->
        <div class="card-footer">
          <input type="submit" name="cat" value="Add Purchase" class="btn btn-primary float-right">
</form>
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



