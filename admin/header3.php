<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EaindraShop | Dashboard</title>

  <link rel="icon" type="image/png" href="../image/e.jpg"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home2.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="ad-logout.php" class="nav-link">Logout</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="AdminLTE-3.0.2/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="AdminLTE-3.0.2/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="AdminLTE-3.0.2/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home2.php" class="brand-link">
   <!--    <img src="../image/s-logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
           
      <span class="brand-text font-weight-light" style="margin-left: 5px;"><b>Eaindra</b>Shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

         <?php 

                  include('confs/config.php');
                     $admin = $_SESSION['email'];
                   $c = "SELECT * FROM admin WHERE admin_email = '$admin'";
                    $r = mysqli_query($mysqli,$c);
                    $row =mysqli_fetch_assoc($r);
                    $admin_id = $row['admin_id'];
                    $role = $row['role'];
                    
                      
                ?>

        <div class="image">
          <img src="user_images/<?php echo $row['admin_img']; ?>" alt="User Image" style="border-radius: 50%">
        </div>
        <div class="info">

          <a href="home2.php" class="d-block"><?php echo $row['admin_name'];  ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home2.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            
            </ul>
          </li>

          <?php  if($role == "Founder & CEO" || $role == "Admin" || $role == "Manager"){?>
       
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Manage Products

                 <?php 
                  include('../confs/config.php');
                    $sql_p = "SELECT * FROM product";
                    $run_p = mysqli_query($mysqli,$sql_p);
                    $count_p = mysqli_num_rows($run_p);       
                ?>
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"><?php echo $count_p ?></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="product_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="product_display2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Product</p>
                </a>
              </li>    
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                Manage Order
                <?php 
                  include('confs/config.php');
                    $sql = "SELECT * FROM orders WHERE status = 2 or status= 3 or status=4 ORDER BY order_id DESC";
                    $run_o = mysqli_query($mysqli,$sql);
                    $count = mysqli_num_rows($run_o);       
                ?>
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right"><?php echo $count ?></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="all_order.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Order</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="order_pending.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Pending Order</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Staffs
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="staff_add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Staff</p>
                </a>
              </li>    
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
            
              <p>
                Manage Purchase
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="purchase_list2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="purchase_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Staff</p>
                </a>
              </li>    
            </ul>
          </li>

          

         



          <li class="nav-item has-treeview">
            <a href="soldout_product.php" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Manage Sold Out
                 <?php 
                  include('confs/config.php');
                    $sql = "SELECT * FROM sold_out ORDER BY sold_out_id DESC";
                    $run_o = mysqli_query($mysqli,$sql);
                    $count = mysqli_num_rows($run_o);       
                ?>
                <i class="fas fa-angle-left right"></i>  
                <span class="badge badge-info right"><?php echo $count ?></span>           
              </p>
            </a>
          </li>

          <!--  <li class="nav-item has-treeview">
            <a href="color_size.php" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Manage Color and Size
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li> -->

           <li class="nav-item has-treeview">
            <a href="saleview.php" class="nav-link">
              <i class="nav-icon fas fa-file-pdf"></i>
              <p>
                Manage Sale Report
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="package-list2.php" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Manage Packages
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="brand-list2.php" class="nav-link">
              <i class="nav-icon fas fa-wine-glass-alt"></i>
              <p>
                Manage Brands
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="cat-list2.php" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Manage Categories
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="sub-list.php" class="nav-link">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>
                Manage SubCategory
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview">
            <a href="customer-list2.php" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Manage Customer
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

          

          <li class="nav-item has-treeview">
            <a href="supplier-list2.php" class="nav-link">
              <i class="nav-icon fas fa-file-pdf"></i>
              <p>
                Manage Supplier
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview">
            <a href="discount_list2.php" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Manage Discount
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

          <?php } ?>

      

  
          <?php if($role == "Supervisor") {?>
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Manage Products

                 <?php 
                  include('confs/config.php');
                    $sql_p = "SELECT * FROM product";
                    $run_p = mysqli_query($mysqli,$sql_p);
                    $count_p = mysqli_num_rows($run_p);       
                ?>
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"><?php echo $count_p ?></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="product_display2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Product</p>
                </a>
              </li>    
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Staffs
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="manage_staff.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Staff</p>
                </a>
              </li>  
            </ul>
          </li>

           <li class="nav-item has-treeview">
            <a href="soldout_product.php" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Manage Sold Out
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

          <?php } ?>

            <li class="nav-item has-treeview">
            <a href="ad-logout.php" class="nav-link">
              <i class="fas fa-sign-in-alt"></i>     
              <p>
                Logout
                <i class="fas fa-angle-left right"></i>             
              </p>
            </a>
          </li>

          
          
       
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <style type="text/css">
  .alert{
  border-radius: 0;
}

.alert-danger{
  color: #dc3545;
  background: white;
  border-color: #dc3545;
}

.alert-success{
  color: #fff;  
  font-size: 14px;
  background: #000;
  border-color: #000;
  border-radius: 2px;
}

.badge-dark {
    color: #fff;
    background-color: #000;
}

.btn-dark{
  color: #fff;
  background-color: #000;
}

.btn-outline-dark:hover{
  background-color: #000;
  color: #fff;
}
</style>