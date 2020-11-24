<?php 
    session_start();
    error_reporting(0);
    include('../confs/config.php');
    include "header3.php";

    $w2 = $_GET['w2'];
?>

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
              title: 'Package has been saved',
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
              text: 'Package updated successfully'
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
            <h1>Manage Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Package Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
      <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Package List</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="card-body">

            <a href="package-list.php" class="btn btn-large btn bg-black margin"><i class="fa fa-plus-square"></i> &nbsp; Add New Package</a>
        <br><br>

            <table class='table' >
               

                <?php 
                $query = "SELECT * FROM package order by package_id desc";
                $result = mysqli_query($mysqli,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['package_id'];
                    $package_name = $row['package_name'];
                    $created_date = $row['created_date'];
                    $package_image = $row['package_image'];

                ?>
                
                    <tr>
                        
                        <td><img src="cover/<?php echo $row['package_image']?>"  height="250"></td>

                        <td><b><?= $package_name ?></b><br>
                          <span class="far fa-clock"></span> <?= $created_date ?></td>
                        <td>
                            <a href="package-edit.php?id=<?php echo $row['package_id']?>" class="btn btn-outline-primary">Edit</a>


                            <button class='delete btn btn-outline-dark' id='del_<?= $id ?>' data-id='<?= $id ?>'>Delete</button>

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
   <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap 4 dependency -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
        <script src='script-package.js' type='text/javascript'></script>

<?php include('footer3.php'); ?>