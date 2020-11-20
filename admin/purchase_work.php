<?php
error_reporting(0);
include_once 'confs/config.php';

if(isset($_POST['save_mul']))
{		
	$total = $_POST['total'];
	$itemqty = 0;
	$total_price = 0;
		
	for($i=1; $i<=$total; $i++)
	{
		$purchaseid = $_POST["purchaseid$i"];
		$productname = $_POST["productname$i"];	
        $color = $_POST["color$i"];
        $price = $_POST["price$i"];
        $qty = $_POST["qty$i"];	
        $image = $_POST["image$i"];
        $tt = $qty*$price;
        $itemqty = $itemqty+$qty;

        $cost = $price * $qty; //work out the line cost
		$total_price = $total_price + $cost; //add to the total cost

		$sql="INSERT INTO purchase_detail( purchase_id,product_id,product_name,price,qty,total,color,color_image) VALUES('".$purchaseid."','0','".$productname."','".$price."','".$qty."','".$tt."','".$color."','".$image."')";
		$sql = $mysqli->query($sql);		
	}

	$pu_sql = "UPDATE purchase SET price = '$total_price', qty ='$itemqty' WHERE purchase_id = '$purchaseid'";
    $pu_run = $mysqli->query($pu_sql);
	
	if($sql)
	{
		?>
        <script>
		alert('<?php echo $total." records was inserted !!!"; ?>');
		window.location.href='purchase_list2.php';
		</script>
        <?php
	}
	else
	{
		?>
        <script>
		alert('error while inserting , TRY AGAIN');
		</script>
        <?php
	}
}
?>