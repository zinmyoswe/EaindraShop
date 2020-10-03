<?php 
session_start();
error_reporting(0);
include('confs/config.php');
include('header3.php');

$w2 = $_GET['w2']; 
?>

<?php 

                  include('confs/config.php');
                     $admin = $_SESSION['email'];
                   $c = "SELECT * FROM admin WHERE admin_email = '$admin'";
                    $r = mysqli_query($mysqli,$c);
                    $row_ad=mysqli_fetch_assoc($r);
                    $admin_id = $row_ad['admin_id'];
                    $role2 = $row_ad['role'];
                                       
                ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    </head>

<style type="text/css">
     .modal-dialog{
            margin-top: 250px;
        }
        .btn-secondary {
    color: #fff;
    background-color: black;
    border-color: black;
}
</style>

<?php if($w2 == 'success'){ ?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- <script type="text/javascript" src="https://adminlte.io/themes/dev/AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script> -->
             <script type="text/javascript">
            
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Staff Information has been saved',
              showConfirmButton: false,
              timer: 1800
            })            
          </script>
<?php } elseif($w2 == 'updated'){ ?>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       <script type="text/javascript">
            
            Swal.fire({
              icon: 'success',
              title: 'Updated',
              text: 'Staff Information updated successfully'
            })
                     
          </script>
<?php } ?>


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
              <li class="breadcrumb-item"><a href="home2.php">Home</a></li>
              <li class="breadcrumb-item active">Manage Staff</li>
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
                  EaindraShop
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $row['admin_name'] ?></b></h2>
                      <p class="text-muted text-sm"><b>Position: </b> <?php echo $row['role'] ?> </p>
                       <p class="text-muted text-sm"><b>Email: </b> <?php echo $row['admin_email'] ?> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                          <?php if($row['admin_img'] == null){ ?>
                <img src="cover/default.jpg"  alt="" class="img-circle img-fluid" >
                  <?php }else{ ?>
                <img src="user_images/<?php echo $row['admin_img'] ?>" alt="" class="img-circle img-fluid">
                  <?php } ?>
                 
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-primary">
                      <i class="fas fa-comments"></i>
                    </a>
                    <?php  if($role2 == "Founder & CEO" || $role2 == "Admin" || $role2 == "Manager"){?>
                    <a href="" class="btn btn-outline-dark">Deactivate</a>
                    <a href="staff_update.php?id=<?php echo $row['admin_id'] ?>" class="btn btn-primary" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Edit Profile
                    </a>
                    <?php }else {} ?>
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

  <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 4 dependency -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
        <script src='script-staff.js' type='text/javascript'></script>
<?php include('footer3.php'); ?>