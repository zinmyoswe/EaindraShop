<?php
  session_start();
    include('confs/config.php');
     include "header3.php";
	    $id = $_GET['id'];
      $result = mysqli_query($mysqli,"SELECT * FROM product WHERE id=$id");
      $row = mysqli_fetch_assoc($result);
      $product_id = $row['id'];
?>

<style>
.color_product ul {
  list-style-type: none;
}

.color_product li{
  display: inline-block;
}

input[type="checkbox"][id^="cb"] {
  display: none;
}

label {
  border: 1px solid #fff;
  padding: 10px;
  display: block;
  position: relative;
  margin: 10px;
  cursor: pointer;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

label::before {
  background-color: white;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey;
  position: absolute;
  top: -5px;
  left: -5px;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 28px;
  transition-duration: 0.4s;
  transform: scale(0);
}

label img {
 
  width: 150px;
  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}

:checked+label {
  border-color: #ddd;
}

:checked+label::before {
  content: "✓";
  background-color: black;
  transform: scale(1);
}

:checked+label img {
  transform: scale(0.9);
  box-shadow: 0 0 5px #333;
  z-index: -1;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Color Multiple Product Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home2.php">Home</a></li>
              <li class="breadcrumb-item"><a href="product_display2.php">Product</a></li>
              <li class="breadcrumb-item active">Color Multiple Product Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
      <div class="col-md-11">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Color Multiple Product</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="card-body">




		<input type="hidden" name="id" value="<?php echo $row['id']?>">

		<label for="name">Product Name</label>
		<input type="text" name="name" id="name" value="<?php echo $row['product_name']?>" class="form-control" disabled>

    <label for="name">Image</label><br>
    <img src="cover/<?php echo $row['cover']?>"  height="200">

    <hr>
 
          <form method="post" action="">

             <div class="color_product">
     <ul >
    <?php 
      $sql = "select * from product ORDER BY id DESC";
      $run = mysqli_query($mysqli,$sql);
      while($row2 = mysqli_fetch_assoc($run)):
    ?>  
    <li class="color_product">
        <input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row2['id']?>">
        <?php echo $row2['id']?>
        <label for="checkItem">
      <img src="cover/<?php echo $row2['cover']?>"></label>

    </li>

        <?php endwhile; ?>
      </ul>
    </div>
        <button type="submit" class="btn btn-primary float-right" style="width:200px" name="save2" >Submit</button>
        <a href="product_display2.php" class="btn btn-outline-dark float-right" style="margin-right: 4px;">Back</a>
        </form>

		<br>

	




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

  <?php

include('confs/config.php');
if(isset($_POST['save2']))
{
   $checkbox = $_POST['check'];         
        for($i=0;$i<count($checkbox);$i++){
        $check_id = $checkbox[$i];
        mysqli_query($mysqli,"insert into color_product(product_id,color_id) values ('".$product_id."','".$check_id."')") or die(mysqli_error());
           ?>
           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       <script type="text/javascript">
            
            Swal.fire({
              icon: 'success',
              title: 'Created',
              text: 'Product and Color created successfully!'
            })
                     
          </script>
           <?php
       }
}
?>

<?php include('footer3.php'); ?>



