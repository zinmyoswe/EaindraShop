<?php
include_once("confs/config.php");

$fromdate = $_POST['fromdate'];
$todate = $_POST['todate'];



$sql_query = "SELECT p.*,s.supplier_id, s.supplier_name,a.admin_id, a.admin_name 
		FROM purchase p
		LEFT JOIN supplier s
		ON s.supplier_id = p.supplier_id
		LEFT JOIN admin a
		ON p.admin_id = a.admin_id
		WHERE p.created_date Between '$fromdate' and '$todate'
		ORDER BY p.created_date ASC";
$resultset = mysqli_query($mysqli, $sql_query) or die("database error:". mysqli_error($mysqli));
$developer_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
	$developer_records[] = $rows;
}	
if(isset($_POST["export_data"])) {	
	$filename = "EaindraShop_PurchaseReport_".date('Ymd') . ".xls";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	$show_coloumn = false;
	if(!empty($developer_records)) {
	  foreach($developer_records as $record) {
		if(!$show_coloumn) {
		  // display field/column names in first row
		  echo implode("\t", array_keys($record)) . "\n";
		  $show_coloumn = true;
		}
		echo implode("\t", array_values($record)) . "\n";
	  }
	}
	exit;  
}
?>