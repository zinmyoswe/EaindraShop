<?php
session_start();
   include('confs/config.php');

      $id = $_GET['id'];
      $result = mysqli_query($mysqli,"SELECT * FROM package WHERE package_id=$id");
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
            <h1>Package Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home2.php">Home</a></li>
              <li class="breadcrumb-item"><a href="package-list2.php">Package</a></li>
              <li class="breadcrumb-item active">Package Edit Page</li>
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
              <h3 class="card-title">Package Edit Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

      <?php

      include('confs/config.php');
     $id = $_GET['id'];
      $result = mysqli_query($mysqli,"SELECT * FROM package WHERE package_id=$id");
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
        $cover = $row['package_image'];
      }
      
    
      $sql = "UPDATE package SET package_name='$name', package_image='$cover',modified_date=now() 
          WHERE package_id = $id ";

      mysqli_query($mysqli,$sql);

      ?>
        <script>
        // alert('Successfully Updated ...');
        window.location.href='package-list2.php?w2=updated';
        </script>
      <?php
    }
      ?>


    
                
                <!-- FORM ENDS -->
               
              <!-- FORM START -->  
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
              <div class="card-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">PackageID</label>
                  <div class="col-sm-10">
                  <input type="text" value="<?php echo $row['package_id'] ?>" class="form-control" id="inputEmail3" disabled/> 
                  </div>
                </div>

                 <input type="hidden" name="id" value="<?php echo $row['package_id'] ?>">

                <!-- FORM START -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">PackageName</label>
                  <div class="col-sm-10">
                  <input type="text" name="name"  class="form-control" id="inputEmail3" value="<?php echo $row['package_name'] ?>"/> 
                  </div>
                </div>
                <!-- FORM ENDS -->

                         <!-- FORM START -->
                

            
                 <div class="form_group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Image</label>

                  <div class="col-sm-10">
                
                  <?php if($row['package_image'] == 0){ ?>
                       <img src="cover/default.jpg"  height="130" >
                  <?php }else{?>
                      <img src="cover/<?php echo $row['package_image']?>" alt="" height="150" width="150">
                  <?php } ?>
                  
                            <input type="file" name="cover">
                            </div>
                            </div>
                            <!-- FORM ENDS -->


               
              </div>
              <!-- /.box-body -->
              <div class="card-footer">
                <a href="package-list2.php" class="btn btn-outline-dark" >Back</a>
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

