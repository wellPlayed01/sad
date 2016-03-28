<?php
session_start();

if((!$_SESSION['txtuser'])&&(!$_SESSION['txtpw']))
{
header("Location: login.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="plugins/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/datatables/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="plugins/datatables/jquery.dataTables.css">
	<link rel="stylesheet" href="plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/css/stylesheetsad.css">
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="plugins/bootstrap/html5shiv.js"></script>
      <script src="plugins/bootstrap/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="plugins/js/jquery-1.9.0.min.js"></script>
        <script src="plugins/js/jquery.min.js"></script>
    <script src="plugins/js/jquery-1.11.1.min.js"></script>
    <script src="plugins/js/bootstrap.min.js"></script>
      <script src="plugins/js/jquery.js"></script>
 
      <script type="text/javascript" charset="utf8" src="plugins/datatables/jquery.dataTables.js"></script>
      <script> $(document).ready(function(){ $('#table_id').DataTable();});</script>
      <script> $('#table_id').DataTable( {select: true } );</script>
      <script> var table = $('#table_id').DataTable();
table.rows('.important').select();
      </script>
      <script>var table = $('#table_id').DataTable();
table.cell( {focused:true} ).data();</script>
   

  </head>
    <style>
        h6{
        font-size:30px;
        }
    </style>
<body>
    <div class="topcontent">
    <img src="plugins/imgs/Salon360.jpg" alt="Cover" width="100%" height="250">
        </div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Transactions <span class="caret"></span></a>             <ul class="dropdown-menu">
      <li><a href="transactions/service_layout.php">Services</a></li>
      <li><a href="transactions/purchase_layout.php">Purchase Order</a></li>
      <li><a href="transactions/receive_layout.php">Receive Delivery</a></li>
          </ul>
        </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="#">Inventory Report</a></li>
              <li><a href="#">Sales Report</a></li>
         </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Utilities <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="user_add.php">User Account</a></li>
        </ul>
        </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="sad_maintenance.php">Maintenance <span class="caret"></span></a>
          <ul class="dropdown-menu">
      <li><a href="materials/sad_materials.php">Materials</a></li>
      <li><a href="service/sad_service.php">Services</a></li>
      <li><a href="promo/sad_promo.php">Seasonal Promo</a></li>
          </ul>
        </li>
    </ul>
  </div>
</nav>
    
    <h5 style="margin-left:1250px;"><a href="logout.php">Logout here!</a></h5>

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="align:center;margin-left:600px;margin-bottom:10px;">Add new record</button>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add User Account</h4>
        </div>
        <div class="modal-body">
            <form method="post">
          <label>Firstname:</label>
          <input type="text" class="form-control" style="width:300" id="fname" name="txtfirst" onkeyup="CapitaliseFirstLetter('fname'); return false" placeholder="Firstname">
          <label>Lastname:</label>
          <input type="text" class="form-control" style="width:300" id="lname" name="txtlast" onkeyup="CapitaliseFirstLetter('lname'); return false" placeholder="Lastname">
          <label>Username:</label>
          <input type="text" class="form-control" style="width:300" name="txtuser" placeholder="Username">
          <label>Password:</label>
          <input type="password" class="form-control" style="width:300" name="txtpass" placeholder="Password">
          <label>Confirm Password:</label>
          <input type="password" class="form-control" style="width:300" name="txtpass2" placeholder="Confirm Password">
          <label>Who is your favorite cousin?</label>
          <input type="text" class="form-control" style="width:300" name="txtans" placeholder="Answer"><br><br>
          <input type="submit" class="btn btn-primary" name="btnSave" value="Save">
            </form>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>
   <script>
function CapitaliseFirstLetter(elemId) {
        var txt = $("#" + elemId).val().toLowerCase();
        $("#" + elemId).val(txt.replace(/^(.)|\s(.)/g, function($1) {
        return $1.toUpperCase(); }));
        }
    </script>
<?php
if(isset($_POST['btnSave']))
{
    include("dbsad.php");
  $id = date('ymd-HisA');
  $firstname=($_POST['txtfirst']);
  $first= trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $firstname)));
  $lastname=($_POST['txtlast']);
  $username=($_POST['txtuser']);
  $confirmpass=($_POST['txtpass2']);
  $answer=($_POST['txtans']);
  mysql_query("insert into user_tbl values('".$id."','".$first."','".$lastname."','".$username."','".$confirmpass."','".$answer."')");
if (mysql_affected_rows() != 0)
{
?>
  <div class="container">
  <div class="alert alert-info">
    <strong>Success!</strong>
      </div>
<?php
}
}
?>
      
      
<!-------edit------------>
<?php 
if(isset($_POST['btnEdit']))
{
    include "dbsad.php";//database connection
$id=$_POST['id'];
    $order = "SELECT * FROM user_tbl 
where userid='$id'";
      $result = mysql_query($order);
      $row = mysql_fetch_array($result);
    ?>
    <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
    <div class="panel panel-success" style="width:80%;margin-left:10%;">
      <div class="panel-heading" style="text-align:center;">UPDATE</div>
      <div class="panel-body">
    <form method="post">
          <label style="margin-left:35%">Firstname:</label>
          <input type="text" class="form-control" style="width:300;margin-left:35%;" value="<?php echo "$row[firstname]" ?>" name="txtfirst1" placeholder="Firstname">
          <label style="margin-left:35%">Lastname:</label>
          <input type="text" class="form-control" style="width:300;margin-left:35%;" value="<?php echo "$row[lastname]" ?>" name="txtlast1" placeholder="Lastname">
          <label style="margin-left:35%">Username:</label>
          <input type="text" class="form-control" style="width:300;margin-left:35%;" value="<?php echo "$row[username]" ?>" name="txtuser1" placeholder="Username">
          <label style="margin-left:35%">Password:</label>
          <input type="password" class="form-control" style="width:300;margin-left:35%;" value="<?php echo "$row[password]" ?>" name="txtpass1" placeholder="Password">
          <label style="margin-left:35%">Confirm Password:</label>
          <input type="password" class="form-control" style="width:300;margin-left:35%;" value="<?php echo "$row[password]" ?>" name="txtpass21" placeholder="Confirm Password">
          <label style="margin-left:35%">Who is your favorite cousin?</label>
          <input type="text" class="form-control" style="width:300;margin-left:35%;" value="<?php echo "$row[answer]" ?>" name="txtans1" placeholder="Answer"><br><br>
          <input type="submit" class="btn btn-success" style="margin-left:45%" name="bupdate" value="Update">
          </form>
    </div>
    </div>
        
</div>
    <?php
if(isset($_POST['bupdate']))
{
    include("dbsad.php");
 
  $id=$_POST['id'];
  $fname=$_POST['txtfirst1'];
  $lname=$_POST['txtlast1'];
  $user=$_POST['txtuser1'];
  $pass=$_POST['txtpass21'];
  $ans=$_POST['txtans1'];

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
}
?> 
<?php
}
    include("dbsad.php");

 ?>
<div class="panel panel-default">
<div class="panel-body">            
  
    <table id="table_id" class="display">
    <thead>
        <th>#</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
    </thead>
    <tfoot>
        <th>#</th>
        <th>Username</th>
        <th>Password</th>
        <th>Actions</th>
    </tfoot>
<tbody>
<tr>
<?php
 $content=mysql_query("select * from user_tbl");
  $total=mysql_affected_rows();
?>
<?php
for($x=0;$x<=$total-1;$x++)
  { 
 $no = $x + 1;
 $row=mysql_fetch_array($content);
 $id=$row['userid'];
    ?>
<?php
    $firstname=$row['firstname'];
    ?>
 <?php
    $lastname=$row['lastname'];
    ?>
 <?php
    $username=$row['username'];
    ?>
 <?php
    $pass=$row['password'];
    ?>
 <?php
    $answer=$row['answer'];
?>
<td><?php echo $no; ?></td>
<td><?php echo $username; ?></td>
<td><?php echo md5($pass); ?></td>
    <form method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
    <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
    <input type="hidden" name="username" value="<?php echo $username; ?>">
    <input type="hidden"  name="pass" value="<?php echo $pass; ?>">
    <input type="hidden" name="answer" value="<?php echo $answer; ?>">
<td>
    <input type="submit" class="btn btn-success" name="btnEdit" value="Edit">
    <input type="submit" class="btn btn-danger" name="btnDelete" value="Delete">
    </form>
     </td>
            </tr>
        <?php 
   }?>
        </tbody>
    </table>
    </div>
      </div>