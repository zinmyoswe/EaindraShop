<?php 

session_start(); 
include('confs/config.php');
include('header3.php');

$id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM purchase where purchase_id = $id");
   $row = mysqli_fetch_assoc($result);


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
        <div class="col-lg-12">
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

           <span class="badge badge-dark" style="margin: 20px;">
        PurhcaseID : <?php echo $_SESSION['id']=$id ?>

        </span>

          <script src="purchase-add-script.js" type="text/javascript"></script>

          <form method="post" action="">

<table class='table table-bordered'>

<tr>
<td>Enter how many records you want to insert</td>
</tr>

<tr>
<td>
<input type="text" name="no_of_rec" placeholder="how many records u want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" class="form-control" required />
</td>
</tr>

<tr>
<td><button type="submit" name="btn-gen-form" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> &nbsp; Generate</button> 

<a href="purchase_list2.php" class="btn btn-outline-primary"> Back</a>
</td>
</tr>

</table>

</form>

          
          <?php include("purchase-add-data.php"); ?>
  
        </div>
        <!-- /.box-body -->
        <div class="card-footer">
       
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