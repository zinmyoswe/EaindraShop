<?php 
    session_start();
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
            <h1>Manage Supplier</h1>
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
          <h3 class="card-title">New Supplier Registration</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <?php
          if(isset($_POST['supplier'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $cover = $_FILES['cover']['name'];
              $tmp = $_FILES['cover']['tmp_name'];

               if($cover){
                  move_uploaded_file($tmp,"cover/$cover");

                }
                if($name == null){
                  echo '  <div class="alert alert-danger">
        <strong><i class="fa fa-exclamation-triangle"> </i> Supplier Name Required!</strong>
        </div>';
                }

        //         if($email == null){
        //           echo '  <div class="alert alert-danger">
        // <strong><i class="fa fa-exclamation-triangle"> </i> Email is Required!</strong>
        // </div>';
        //         }
                else{


            $query = $mysqli->query("INSERT INTO supplier(supplier_name,email,address,phone,supplier_cover,created_date)
                VALUES ('$name','$email','$address','$phone','$cover',NOW())");

             if($query){

                  echo '  <div class="notice notice-success">
        <strong><i class="fa fa-check-circle-o"> </i> Supplier Added Successfully</strong>
        </div>';
            echo "<script>window.open('supplier-list2.php?w2=success','_self')</script>";
                  }
                }
                }

               
  
  
          ?>
          <form method="post" action="" enctype="multipart/form-data">
<!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Supplier Name</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="supplier name"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                  <input type="email" name="email"  class="form-control" id="inputEmail3" placeholder="email"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                  <div class="col-sm-10">
                  <textarea type="text" name="address"  class="form-control" id="inputEmail3"/></textarea>
                  </div>
                </div>
                <!-- FORM ENDS -->

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
                  <div class="col-sm-10">
                  <input type="text" name="phone"  class="form-control" id="inputEmail3" placeholder="phone"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

               
                <br>
                <!-- FORM ENDS -->

                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                            <input type="file" name="cover" >
                            </div>
                            </div>
                            <!-- FORM ENDS -->
  <br><br>
  
        </div>
        <!-- /.box-body -->
        <div class="card-footer">
          <input type="submit" name="supplier" value="Add Supplier" class="btn btn-dark float-right">
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




