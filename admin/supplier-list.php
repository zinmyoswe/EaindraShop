<?php 
include('supplier/config.php');
include('header3.php');
?>
<script src="jquery.js" type="text/javascript"></script>
<script src="js-script.js" type="text/javascript"></script>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Supplier</h1>
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
      <div class="row">
      <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title">Supplier List</h3>

          <div class="card-tools pull-right">
            <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
         
        <div class="card-body">
        <a href="supplier_generate.php" class="btn btn-large btn-dark"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add New Suppiler</a>
        <br><br>
<form method="post" name="frm">
<table class='table table-bordered table-responsive'>
<tr>
<th>##</th>
<th>Name</th>
<th>Email</th>
<th>Address</th>
<th>Phone</th>
<th>Logo</th>
</tr>
<?php
  $res = $mysqli->query("SELECT * FROM supplier ORDER BY supplier_id DESC");
  $count = $res->num_rows;

  if($count > 0)
  {
    while($row=$res->fetch_array())

    {
      ?>
      <tr>
      <td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['id']; ?>"  /></td>
      <td><?php echo $row['supplier_name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td>
           <?php if($row['supplier_cover'] == null){ ?>
                <img src="cover/default.png" width="200" height="100" >
           <?php }else{ ?>
                <img src="cover/<?php echo $row['supplier_cover']; ?>" width="200" height="100" >
            <?php } ?>
        

      </td>
      </tr>
      <?php
    } 
  }
  else
  {
    ?>
        <tr>
        <td colspan="3"> No Records Found ...</td>
        </tr>
        <?php
  }
?>

<?php

if($count > 0)
{
  ?>
  <tr>
 
    <td colspan="6">
    <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>

    
    <label style="margin-left:100px;">
    <span style="word-spacing:normal;"> with selected :</span>
    <span><img src="Edit.png" onClick="edit_records();" alt="edit" width="50px" height="50px"/></span> 
    <span><img src="Delete.png" onClick="delete_records();" alt="delete" width="50px" height="50px"/></span>
    </label>
    
    
    </td>
  </tr>    
    <?php
}

?>

</table>
</form>


        </div>
        <!-- /.box-body -->
       
        <div class="card-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
       </div> <!--  col-md-5 end -->
       <!-- ===========================2nd box start -->
        <!-- Default box -->
        
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


    <?php include('footer3.php'); ?>




