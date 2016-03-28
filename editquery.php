    <?php
error_reporting(E_ALL&~E_NOTICE);
if($connect=@mysql_connect("localhost","root"))
 echo "<br/>";
 else
 die ("<br/>".@mysql_error());
 $connect=mysql_select_db("saddb");
 
if($_POST['bupdate'])
{ $id=$_POST['id'];
  $fname=$_POST['first'];
  $lname=$_POST['last'];
  $user=$_POST['user'];
  $pass=$_POST['pass2'];
  $ans=$_POST['ans'];

  mysql_query("update user_tbl set firstname= '$fname',lastname= '$lname',username= '$user',password= '$pass',answer= '$ans' where userid= '$id'");
 if (mysql_affected_rows() != 0)
{
?>
  <div class="container">
  <div class="alert alert-info">
    <strong>Success!</strong>
      </div>
<?php
}
 else
 {
 header("Location: user_add.php");
}
}
?>