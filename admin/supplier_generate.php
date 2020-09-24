<?php 
include_once 'supplier/config.php';
include('header3.php');
?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Supplier Generate</h1>
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
        <div class="card-header with-border">
          <h3 class="card-title">Title</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
             <form method="post" action="">
           <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Row No</label>
                  <div class="col-sm-10">
                  <input type="text" name="no_of_rec" placeholder="how many records u want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" class="form-control" id="inputEmail3" required />
                  </div>
                </div>
                <!-- FORM ENDS -->
                <br><br>
                <td align="right"><button type="submit" name="btn-gen-form" class="btn btn-warning pull-right">Generate</button> 
                  </form>
                  <br><br>
                     <?php include("supplier-add-data.php"); ?>
        </div>
        <!-- /.box-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('footer3.php'); ?>