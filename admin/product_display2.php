<?php 
    session_start();
    error_reporting(0);
    include('confs/config.php');
    include "header3.php";

    $w2 = $_GET['w2'];


?>

   <?php 

                  include('confs/config.php');
                     $admin = $_SESSION['email'];
                   $c = "SELECT * FROM admin WHERE admin_email = '$admin'";
                    $r = mysqli_query($mysqli,$c);
                    $row_ad=mysqli_fetch_assoc($r);
                    $admin_id = $row_ad['admin_id'];
                    $role = $row_ad['role'];
                                       
                ?>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />



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
              title: 'Product created successfully!',
              showConfirmButton: false,
              timer: 1800
            }).then(function() {
            window.location = "product_display2.php";
        });                
          </script>
<?php } elseif($w2 == 'updated'){ ?>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       <script type="text/javascript">
            
            Swal.fire({
              icon: 'success',
              title: 'Updated',
              text: 'Product updated successfully'
            }).then(function() {
            window.location = "product_display2.php";
        });    
                     
          </script>
<?php } elseif($w2 == 'discount'){ ?>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       <script type="text/javascript">
            
            Swal.fire({
              icon: 'success',
              title: 'Discount Created',
              text: 'Discount Created successfully'
            }).then(function() {
            window.location = "product_display2.php";
        });    
                     
          </script>
<?php } ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
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
          <h3 class="card-title">Manage Product</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
      
          <table class="table">

          
                    

                <?php 
                $per_page = 6;

                if(isset($_GET['page'])){
                  $page = $_GET['page'];
                }

                else{
                  $page = 1;
                }

                $start_from = ($page-1) * $per_page;
                $query = "SELECT * FROM product
                                   LEFT JOIN categories
                                   ON categories.cat_id = product.categories
                                   LEFT   JOIN brand
                                   ON brand.brand_id = product.brand
                                   LEFT   JOIN supplier
                                   ON supplier.supplier_id = product.supplier
                                   ORDER BY 1 DESC LIMIT $start_from, $per_page";
                $result = mysqli_query($mysqli,$query);

                $count = 1;
                while($row = mysqli_fetch_assoc($result) ){
                    $id = $row['id'];
                    $product_name = $row['product_name'];
                    $created_date = $row['created_date'];
                    $price = $row['price'];

                ?>

                    <tr>
                      <div class="display">
                      <input type="hidden" name="<?php echo $row['id']; ?>">
                      <td><b><?= $product_name ?></b><br>
                      <i style="color: #aeb6bf">by <?php echo $row['brand_name']; ?> 
                         <small> (in <?php echo $row['cat_name']; ?>)</small></i><br>
                       <p><i>from</i> <?php echo $row['supplier_name']; ?></p>
                       <b style="font-size: 16px;">ITEM LEFT : <?php echo $row['qty']; ?></span></b><br>

                        <?php
                          include('confs/config.php');
                          $sql_dis = mysqli_query($mysqli,"SELECT * FROM discount 
                            LEFT JOIN product ON discount.product_id = product.id
                            WHERE product.id = '$id'");
                          $result_dis = mysqli_fetch_assoc($sql_dis);
                           $percentage = $result_dis['percentage'];
                           $discount_id = $result_dis['discount_id'];
                          ?>
                          <?php if( $discount_id == 0){ ?>
                               <h style="font-family: Arial; font-size: 15px; color: ;">US$ <?php echo $price ?></h>
                          <?php }else{?>
                          <?php
                            $selling_price = $price-($price*($percentage/100))
                          ?>
                          <span style="text-decoration: line-through; color: #DC3545; ">US$<?php echo $price ?></span>
                          US$<?php echo $selling_price; ?>
                          <?php } ?>
                          


                       <?php if($row['qty'] < 5 && $row['qty'] >3){ ?>
                          <span class='badge badge-pill badge-warning' >Low In Stock</span>
                      <?php }elseif($row['qty'] < 1){ ?>
                          <span class='badge badge-pill badge-danger' >Out Of Stock</span>
                      <?php }elseif($row['qty'] <= 3 && $row['qty'] >=1){?>
                          <img src="../image/bestseller.png" width="100" height="25" style="margin-bottom: 4px;">
                      <?php }else{} ?>

                      <br><br>

                      <?php  if($role == "Founder & CEO" || $role == "Admin" || $role == "Manager"){?>
                       <a href="product_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-info" >Edit</a>

              
                     <!--  <a class='delete btn btn-outline-dark' href="product_del.php?id=<?php echo $row['id'] ?>">Delete</a> -->

                      <button class='delete btn btn-outline-dark' id='del_<?= $id ?>' data-id='<?= $id ?>'>Delete</button>

                      </td>
                      <?php }else{} ?>

                       
                      <td>
                        <?php  if($role == "Founder & CEO" || $role == "Admin" || $role == "Manager"){?>
                        <p>
                          <a href="image_attribute.php?id=<?php echo $row['id'] ?>" class="btn btn-dark">Image</a>

                          <a href="color_product.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-dark">Color&Product</a>
                      </p>

                    <!--   <a href="generate.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Color&Size</a> -->



                         <a href="discount.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-primary">Manage Discount</a>
                         <?php }else{} ?>
                      </td>

                    <td><img src="cover/<?php echo $row['cover']; ?>" width="110" height="135"/></td> 
                      </div>
                    </tr>
                
              
                <?php
                    $count++;
                }
                ?>
            </table>
        </div>
        <style type="text/css">
          .pagination > li > a:focus, .pagination > li > a:hover, .pagination > li > span:focus, .pagination > li > span:hover {
    z-index: 2;
    color: white;
    background-color: #23527c;
    border-color: whitesmoke;
}
        </style>
        <!-- /.box-body -->
        <div class="card-footer">
          <?php include("pagination.php"); ?>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

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
        <script src='script-product2.js' type='text/javascript'></script>
  
<?php include('footer3.php'); ?>


