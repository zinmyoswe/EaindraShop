<?php

	 include('../confs/config.php');
    
    $id = $_POST['id'];
    $name = $_POST['name'];
   

    $sql = "UPDATE categories SET cat_name='$name',modified_date=now() WHERE cat_id=$id";


    mysqli_query($mysqli, $sql);  

    echo "<script>window.open('cat-list2.php','_self')</script>";

?>