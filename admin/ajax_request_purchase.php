<?php 
	include('confs/config.php');
	
	if(isset($_POST['purchase_id']) && $_POST['purchase_id'] !='')
	{
		$countryID = $_POST['purchase_id'];
		$sql = "select * from purchase where purchase_id = '".$countryID."' order by product_name ASC";
		$rs = mysqli_query($mysqli,$sql);
		$numRows = mysqli_num_rows($rs);
		
		if($numRows == 0)
		{
			echo '<option>No Purchase  found</option>';
		}
		else
		{
			
			while($cities = mysqli_fetch_assoc($rs))
			{
				echo '<option value="'.$cities['product_name'].'">'.$cities['product_name'].'</option>';
			}
			
		}
		
	}

?>