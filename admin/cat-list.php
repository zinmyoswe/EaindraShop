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
            <h1>Add New Category</h1>
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
          <h3 class="card-title">New Category Registration</h3>

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
  
            if($name == null){
                  echo '  <div class="alert alert-danger">
        <i class="fa fa-exclamation-triangle"> </i> Categories Name Required!
        </div>';
                }else{
      $query = $mysqli->query("INSERT INTO categories(cat_name,created_date)
      VALUES ('$name',NOW())");

               
                

             if($query){

                  echo '  <div class="alert alert-success">
        <i class="fa fa-check-circle-o"> </i> Category Added Successfully
        </div>';
        echo "<script>window.open('cat-list2.php','_self')</script>";
                  }
                }
                }

               
  
  
          ?>
          <form method="post" action="" enctype="multipart/form-data">
<!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="Categoryname"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->
                
  <br><br>
  
        </div>
        <!-- /.box-body -->
        <div class="card-footer">
          <input type="submit" name="cat" value="Add Category" class="btn btn-primary float-right">
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



