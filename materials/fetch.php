<?php

  include('../database/connect_PDO.php');

  $id = $_POST['id'];

  $sql = "SELECT * FROM material_tbl WHERE material_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array($id));
  $browse = $q -> fetchAll();
  foreach($browse as $fetch){

    $output[] = array ($fetch['material_id'],$fetch['category'],$fetch['brand_name'],
      $fetch['variant'],$fetch['packaging'],
      $fetch['unit'], $fetch['value']  );
  }         
$conn = null;             

echo json_encode($output);
?>    