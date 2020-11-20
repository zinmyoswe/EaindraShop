

<?php 
error_reporting(0);
session_start(); 
include('confs/config.php');


   $id = $_SESSION['id'];
   $result = mysqli_query($mysqli,"SELECT * FROM purchase where purchase_id = $id");
   $row = mysqli_fetch_assoc($result);

   // echo $id;


?>

<!-- <?php echo $_SESSION['id']?> -->



<?php
if(isset($_POST['btn-gen-form']))
{
	?>
    <form method="post" action="purchase_work.php" enctype="multipart/form-data">

    <input type="hidden" name="total" value="<?php echo $_POST["no_of_rec"]; ?>" />
	<table class='table table-bordered'>
    
    <tr>
    <th>No</th>
    <th>PurchaseID</th>
    <th>ProductName</th>
    <th>Color</th>
    <th>Price</th>
    <th>Qty</th>
    <th>Image</th>
    </tr>
	<?php
	for($i=1; $i<=$_POST["no_of_rec"]; $i++) 
	{
		?>
        <tr>
        <td><?php echo $i; ?></td>
        <td><input type="text" name="purchaseid<?php echo $i; ?>" value="<?php echo $id ?>" class='form-control' /></td>
        <td><input type="text" name="productname<?php echo $i; ?>" value="<?php echo $row['product_name'] ?>" class='form-control' /></td>

        <td><input type="text" name="color<?php echo $i; ?>" placeholder="Color Name" class='form-control' /></td>

        <td><input type="text" name="price<?php echo $i; ?>" placeholder="Price" class='form-control' /></td>

         <td><input type="text" name="qty<?php echo $i; ?>" placeholder="Qty" class='form-control' /></td>

         <td><input type="text" name="image<?php echo $i; ?>" placeholder="Image" class='form-control' /></td>
        </tr>
        <?php
	}
	?>
    <tr>
    <td colspan="3">
    
    <button type="submit" name="save_mul" class="btn btn-dark"><i class="glyphicon glyphicon-plus"></i> &nbsp; Insert all Records</button> 

  
    
    </td>
    </tr>
    </table>
    </form>
	<?php
}
?>



          
