<?php
    include('../confs/config.php');
     include "header3.php";
	$id = $_GET['id'];
	$result = mysqli_query($mysqli,"SELECT * FROM categories WHERE cat_id=$id ");
	$row = mysqli_fetch_assoc($result);
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category Edit
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
      <div class="col-md-9">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Category Edit</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="card-body">




	<form action="cat-update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['cat_id']?>">

		<label for="name">Category Name</label>
		<input type="text" name="name" id="name" value="<?php echo $row['cat_name']?>" class="form-control">



		<br><br>

		<input type="submit" value="Update Category" class="btn btn-primary float-right">
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