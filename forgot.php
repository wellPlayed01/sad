<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheetsad.css">
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.9.0.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.js"></script>
   

  </head>
  <style>
      #bodycontent{
      background-color: beige;
</style>
    <body>
<div class="bodycontent">
        <div class="panel panel-primary" style="margin-top:150px;margin-left:450px;margin-right:450px;">
      <div class="panel-heading" style="text-align:center;">Login</div>
      <div class="panel-body">
    <form method="post">
          <label>User Name:</label>
          <input type="text" class="form-control" name="txtuser" placeholder="User Name"><br>
          <label>Who is your favorite cousin?</label>
          <input type="text" class="form-control" name="txtans" placeholder="Answer"><br>
          <input type="submit" class="btn btn-primary" name="btn" value="SUBMIT" style="margin-left:200px;">
          </form>
            
    </div>
    </div>
        
</div>    
    
    
    </body>
</html>

<?php
include("db.php");

if(isset($_POST['btn']))
{
$user_name=$_POST['txtuser'];
$user_ans=$_POST['txtans'];
    
$check_user="select * from user_tbl where username='$user_name' AND answer='$user_ans'";
$run=mysql_query($check_user);
if(mysql_num_rows($run))
{
    ?>
        <div class="panel panel-primary" style="margin-top:150px;margin-left:450px;margin-right:450px;">
      <div class="panel-heading" style="text-align:center;">Login</div>
      <div class="panel-body">
    <form method="post">
          <label>New Password:</label>
          <input type="password" class="form-control" name="txtpass" placeholder="Password"><br>
          <label>Confirm Pssword:</label>
          <input type="password" class="form-control" name="txtpass2" placeholder="Password"><br>
          <input type="submit" class="btn btn-primary" name="btnsub" value="SUBMIT" style="margin-left:200px;">
          </form>
<?php
    if(isset($_POST['btnsub']))
    {
    $pass2=$_POST['txtpass2'];
    $user=$_POST['txtuser'];    
    mysql_query("update user_tbl set password= '$pass2' where username='$txtuser'");
    }
}
echo "<script>window.open('Sad.php','_self')</script>";
$_SESSION['txtuser']=$user_name;
$_SESSION['txtpw']=$user_pass;
else
{
echo "<script>alert('Email or password is incorrect!')</script>";
}
}
?>
        </div>