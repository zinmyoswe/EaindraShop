<?php
	
	 include('confs/config.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $supplier = $_POST['supplier'];
    $admin_id = $_POST['admin_id'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
   

    $sql = "UPDATE purchase SET product_name='$name',supplier_id='$supplier',admin_id='$admin_id',price='$price',qty='$qty',modified_date=now() WHERE purchase_id=$id";


    mysqli_query($mysqli, $sql);  

    echo "<script>window.open('purchase_list2.php?w2=updated','_self')</script>";

?>