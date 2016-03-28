<?php
    include('../database/connect_PDO.php');

$id = $_POST['id'];
$name = trim($_POST['name']);
$cat = $_POST['cat'];
$variant = $_POST['variant'];
$pack = $_POST['pack'];
$unit = $_POST['unit'];
$value = $_POST['value'];


  $sql = "UPDATE material_tbl SET category=?, brand_name=?, variant=?, packaging=?, 
  unit=?, value=? WHERE material_id = ?";
  $q = $conn->prepare($sql);
  $q -> execute(array( $cat,$name,$variant,$pack,$unit,$value,$id  ));
     
$conn = null;             

echo json_encode($output);
?>    