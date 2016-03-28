<?php
    include('../database/connect_PDO.php');

$name = trim($_POST['name']);
$cat = $_POST['cat'];
$variant = $_POST['variant'];
$pack = $_POST['pack'];
$unit = $_POST['unit'];
$value = $_POST['value'];
$id = uniqid('MT');


  $sql = "INSERT INTO material_tbl values(?,?,?,?,?,?,?)";
  $q = $conn->prepare($sql);
  $q -> execute(array($id,$cat,$name,$variant,$pack,$unit,$value));
  $browse = $q -> fetchAll();
     
$conn = null;             

echo json_encode($output);
?>    