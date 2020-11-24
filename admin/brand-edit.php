<?php
session_start();
   include('confs/config.php');

      $id = $_GET['id'];
      $result = mysqli_query($mysqli,"SELECT * FROM brand WHERE brand_id=$id");
      $row = mysqli_fetch_assoc($result);
?>

<?php include('header3.php'); ?>
<!-- =============================================== -->

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Brand Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home2.php">Home</a></li>
              <li class="breadcrumb-item"><a href="brand-list2.php">Brand</a></li>
              <li class="breadcrumb-item active">Brand Edit Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
   <div class="col-md-10">
          <!-- Horizontal Form -->
          <div class="card">
            <div class="card-header with-border">
              <h3 class="card-title">Brand Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

      <?php

      include('confs/config.php');
     $id = $_GET['id'];
      $result = mysqli_query($mysqli,"SELECT * FROM brand WHERE brand_id=$id");
      $row = mysqli_fetch_assoc($result);

      if(isset($_POST['update'])){
      $id = $_POST['id'];
      $name = $_POST['name'];
      $cover = $_FILES['cover']['name'];
      $tmp = $_FILES['cover']['tmp_name'];
     
     
      if($cover){
        move_uploaded_file($tmp, "cover/$cover");
      }
      else{
        $cover = $row['brand_cover'];
      }
      
    
      $sql = "UPDATE brand SET brand_name='$name',brand_cover='$cover',modified_date=now() 
          WHERE brand_id = $id ";

      mysqli_query($mysqli,$sql);

      ?>
        <script>
        // alert('Successfully Updated ...');
        window.location.href='brand-list2.php?w2=updated';
        </script>
      <?php
    }
      ?>


    
                
                <!-- FORM ENDS -->
               
              <!-- FORM START -->  
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="card-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">BrandID</label>
                  <div class="col-sm-10">
                  <input type="text" value="<?php echo $row['brand_id'] ?>" class="form-control" id="inputEmail3" disabled/> 
                  </div>
                </div>

                 <input type="hidden" name="id" value="<?php echo $row['brand_id'] ?>">

                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">BrandName</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" value="<?php echo $row['brand_name'] ?>"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                         <!-- FORM START -->
                

            
                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                
                  <?php if($row['brand_cover'] == 0){ ?>
                       <img src="cover/default.jpg"  height="130" >
                  <?php }else{?>
                      <img src="cover/<?php echo $row['brand_cover']?>" alt="" height="150" width="150">
                  <?php } ?>
                  
                            <input type="file" name="cover">
                            </div>
                            </div>
                            <!-- FORM ENDS -->


               
              </div>
              <!-- /.box-body -->
              <div class="card-footer">
                <a href="brand-list2.php" class="btn btn-outline-dark" >Back</a>
                <button type="submit" name="update" class="btn btn-dark pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </div> <!-- col-md-6 ends-->

        
          </div><!--  row ends -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


                

<script src="jquery.min.js" integrity "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


  <?php include('footer3.php') ?>

