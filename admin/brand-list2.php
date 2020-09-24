<?php 
    include('../confs/config.php');
    include "header3.php";
?>

<style type="text/css">
    .modal-dialog {
    width: 330px;
    margin: 30px auto;
}
</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Brands
        <small>it all starts here</small>
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
      <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Brand List</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="card-body">

            <a href="brand-list.php" class="btn btn-large btn bg-black margin"><i class="fa fa-plus-square"></i> &nbsp; Add New Brand</a>
        <br><br>

            <table class='table' >
               

                <?php 
                $query = "SELECT * FROM brand order by brand_id desc";
                $result = mysqli_query($mysqli,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['brand_id'];
                    $brand_name = $row['brand_name'];
                    $created_date = $row['created_date'];
                    $brand_cover = $row['brand_cover'];

                ?>
                
                    <tr>
                        
                        <td><img src="cover/<?php echo $row['brand_cover']?>" width="200" height="85"></td>

                        <td><b><?= $brand_name ?></b><br>
                          <span class="fa fa-clock-o"></span><?= $created_date ?></td>
                        <td>
                            <a href="brand-edit.php?id=<?php echo $row['brand_id']?>" class="btn btn-outline-primary">Edit</a>

                            <a class='delete btn btn-outline-dark' href="brand-del.php?id=<?php echo $row['brand_id']?>">Delete</a>

                        </td>
                        
                    </tr>
                <?php
                    $count++;
                }
                ?>
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
<!doctype html>
<html>
    <head>
        <title>Confirmation alert Before Delete record with jQuery AJAX</title>
        <link href='.css' rel='stylesheet' type='text/css'>
        <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src='jquery-3.3.1.js' type='text/javascript'></script>
        <script src='../bootstrap/js/bootstrap.min.js'></script> 
        <script src='bootbox.min.js'></script>
        <script src='brand-script.js' type='text/javascript'></script>
    </head>
    <body>
        
       
        
    </body>
</html>

<?php include('footer3.php'); ?>