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
            <h1>Manage Staff</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">

            <?php
          $sql = "SELECT * FROM admin";
          $run = mysqli_query($mysqli,$sql);
          while($row = mysqli_fetch_assoc($run)):
            $role = $row['role'];
        ?>
        

            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Sport Store
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $row['admin_name'] ?></b></h2>
                      <p class="text-muted text-sm"><b>Position: </b> <?php echo $row['role'] ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="user_images/<?php echo $row['admin_img'] ?>" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-comments"></i>
                    </a>
                    <a href="staff_update.php?id=<?php echo $row['admin_id'] ?>" class="btn btn-warning" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Edit Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
           <!--  col-12 col-sm-6 col-md-4 d-flex align-items-stretch end -->
         <?php endwhile; ?>
         </div>
       </div>
     </div>
        
        </section>
      </div>
  <!-- /.content-wrapper -->
<?php include('footer3.php'); ?>