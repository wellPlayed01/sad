<?php

include('../database/connect_PDO.php');

  $sql = "SELECT * FROM material_tbl";
  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['material_id'],$fetch['category'],$fetch['brand_name'],
    	$fetch['variant'],$fetch['packaging'],
    	($fetch['value']." ".$fetch['unit'])  );				 	
  }         
$conn = null;             

echo json_encode($output);
?>    