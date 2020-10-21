<?php
    
   error_reporting(0);
   session_start();

   include('confs/config.php');



     $id = $_POST['id'];
     $color = $_POST['rdocolor'];
     $size = $_POST['size'];

     

     // GET COLOR
     $result = mysqli_query($mysqli,"SELECT * FROM attribute where value='$color'");
     $row = mysqli_fetch_assoc($result);
     $attr = $row['attr_id'];
     $attr_img = $row['attr_img'];

     // GET SIZE
     $result2 = mysqli_query($mysqli,"SELECT * FROM attribute where value='$size'");
     $row2 = mysqli_fetch_assoc($result2);
     $attr2 = $row2['attr_id'];
     

     
     $_SESSION['color'] = $attr;
     $_SESSION['size'] = $attr2;

     // Product Attribute
     $result3 = mysqli_query($mysqli,"SELECT * FROM product_attribute where color='$attr' AND size='$attr2' AND product_id = '$id'");
     $row3 = mysqli_fetch_assoc($result3);

     $product_attribute = $row3['pro_attr_id'];

     $_SESSION['product_attribute'] = $product_attribute;

     $insert_cart = "INSERT INTO cart (product_id,color,size)
                     VALUES ('$id','$color','$size')";
     mysqli_query($mysqli,$insert_cart);


echo "<script>window.location='update-cart.php?action=add&id=$id'</script>";


?>
