<?php

include_once 'dbsad.php';

if (isset($_POST['done'])) {

  $id=mysql_escape_string($_POST['id']);
  $fname=mysql_escape_string($_POST['first']);
  $lname=mysql_escape_string($_POST['last']);
  $user=mysql_escape_string($_POST['user']);
  $pass=mysql_escape_string($_POST['pass2']);
  $ans=mysql_escape_string($_POST['ans']);
  mysql_query("update user_tbl set firstname= '$fname',lastname= '$lname',username= '$user',password= '$pass',answer= '$ans' where userid= '$id'");
    exit();
 }

?>