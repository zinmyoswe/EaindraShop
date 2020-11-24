<?php 
    session_start(); 
    error_reporting(0);
    include('confs/config.php');
    include "header3.php";

    $w2 = $_GET['w2'];
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
              title: 'Purchase has been saved',
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
              text: 'Purchase updated successfully'
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
            <h1>Manage Purchase</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Purchase Page</li>
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
          <h3 class="card-title">Purchase List</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="card-body">

            <a href="purchase_list.php" class="btn btn-large btn bg-black margin"><i class="fa fa-plus-square"></i> &nbsp; Add New Purchase</a>
        <br><br>

            <table class='table' >
                <tr style='background: whitesmoke;'>
                    <th>PurchaseID</th>
    <th>ProductName</th>
    <th>SupplierID</th>
    <th>AdminID</th>
    
    <th>Qty</th>
    <th>Total</th>
    <th>Date</th>
    <th></th>
                </tr>



                <?php 
                $query = "SELECT  p.*,s.supplier_id, s.supplier_name,a.admin_id, a.admin_name 
    FROM purchase p
    LEFT JOIN supplier s
    ON s.supplier_id = p.supplier_id
    LEFT JOIN admin a
    ON p.admin_id = a.admin_id

    order by p.purchase_id desc";
                $result = mysqli_query($mysqli,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['purchase_id'];
                    $product_name = $row['product_name'];
                    $created_date = $row['created_date'];

                ?>
                
                    <tr>
                        <td><?php echo $row['purchase_id'] ?></td>
      
      <td><?php echo $row['product_name'] ?></td>
      <td><?php echo $row['supplier_name'] ?></td>
      <td><?php echo $row['admin_name'] ?></td>
      
      <td><?php echo $row['qty'] ?></td>
      <td><p style="font-family: Arial;">$ <?php echo $row['total'] ?></p></td>
      <td>
           <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-alarm" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
</svg>
        <?php echo $row['created_date'] ?></td>
                        <td align='center'>

                 

                            <a href="purchase-edit.php?id=<?php echo $row['purchase_id']?>" class="btn btn-outline-primary">Edit</a>

                       

                            <button class='delete btn btn-outline-dark' id='del_<?= $id ?>' data-id='<?= $id ?>'>Delete</button>
                              <br><br>
                                     <a href="purchase_add3.php?id=<?php echo $row['purchase_id']?>" class="btn btn-dark">Purchase Detail Add</a>

                                     <br><br>
                                     <a href="purchase_detail_view.php?id=<?php echo $row['purchase_id']?>" class="btn btn-outline-dark">Purchase Detail View</a>

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
        <script src='script-purchase.js' type='text/javascript'></script>
   

   <?php include('footer3.php'); ?>