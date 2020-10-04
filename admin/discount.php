
<?php
   session_start();
   include('confs/config.php');
   include('header3.php');

     $id = $_GET['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM product where id = $id");
   $row = mysqli_fetch_assoc($result);
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Discount </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Discount Page</li>
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
          <h3 class="card-title">Add Discount</h3>

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
             <div class="col-md-6">
                   
                <div class="Compose-Message">               
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Discount</strong> 
                    </div>
                    <div class="panel-body">
                        <form method="post" action="" enctype="multipart/form-data">

                          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                         ProductID :  PRO_<?php echo $row['id'] ?><br>

                        <label>Product Name : </label>
                        <?php echo $row['product_name'] ?><br>

                         
                        <p style="font-family: arial; font-size: 16px;">Price :  $<?php echo $row['price'] ?></p>

                         <label>Brand : </label>
                         <?php 
                         	$result = mysqli_query($mysqli,"SELECT product.*,brand.brand_name,brand.brand_id FROM product LEFT JOIN brand
                         		ON brand.brand_id = product.brand
                         		WHERE product.id = $id");
                         	$row2 = mysqli_fetch_assoc($result)
                         ?>
                         <?php echo $row2['brand_name'] ?><br>

                         <label>Categories : </label>
                         <?php 
                         	$result = mysqli_query($mysqli,"SELECT product.*,cat.cat_name,cat.cat_id FROM product LEFT JOIN categories cat
                         		ON cat.cat_id = product.categories
                         		WHERE product.id = $id");
                         	$row3 = mysqli_fetch_assoc($result)
                         ?>
                         <?php echo $row3['cat_name'] ?><br>


                        

                            
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
              <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
          <script type="text/javascript">
$(document).ready(function(){
  $('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});
});
</script>
             

     


      <div class="row">
          <div class="col-md-5 mb-3">
             <label>From Date: </label>
                  <input type="text" class="form-control" name="str_date" id="datepicker"  data-provide="datepicker" placeholder="dd/mm/yy" required/>
                  <script>
                  
    </script>
          </div>
          <div class="col-md-4 mb-3">
                     <label>To Date : </label>
                  <input type="text" class="form-control" name="end_date" id="datepicker2"  data-provide="datepicker" placeholder="dd/mm/yy" required/>
          </div>

          <div class="col-md-3 mb-3">
           <label>Reduce %  : </label>
                    <input type="text" class="form-control" name="percentage" id="datepicker" required/>
          </div>
        </div> <!-- row end -->
                

                        
              

                        
                      
              <hr />
                        
                      <input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg btn-block login-button">
          </form>
          
                    </div>
                  
                </div>
                     </div>
                </div><!-- end form-->

                </div>
          </div> <!-- end container -->

          
                 
   </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


   <?php

    if(isset($_POST['submit'])){

      $id = $_POST['id'];
      $str_date = $_POST['str_date'];
      $end_date = $_POST['end_date'];
      $percentage = $_POST['percentage'];
 
      
    
      $sql = "INSERT INTO discount(product_id,percentage,created_date,duration,end_date)
                   VALUES('$id','$percentage','$str_date','','$end_date')";

      $run=mysqli_query($mysqli,$sql);
      
      if($run){

        // echo "<script>alert('Discount has been inserted')</script>";
        echo "<script>window.open('product_display2.php?w2=discount','_self')</script>";
      }
      else{
        echo "error";
      }

    
    }
?>

<?php include('footer3.php'); ?>
