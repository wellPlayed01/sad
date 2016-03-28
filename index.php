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
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="plugins/js/jquery-1.9.0.min.js"></script>
        <script src="plugins/js/jquery.min.js"></script>
    <script src="plugins/js/jquery-1.11.1.min.js"></script>
    <script src="plugins/js/bootstrap.min.js"></script>
      <script src="plugins/js/jquery.js"></script>
 
      <script type="text/javascript" charset="utf8" src="..plugins/datatables/jquery.dataTables.js"></script>
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
    
    <h5 style="margin-left:1250px;"><a href="log/logout.php">Logout here!</a></h5>
        <div class="panel panel-info" style="margin-left:100px;margin-right:100px;margin-top:75px;">
            <div class="panel-body" style="background:lavender;"><br><h1 id="message" style="text-align:center;font-size:50px;">Welcome Admin <?php echo $_SESSION['txtuser']; ?>!</h1><br><br>
</div>
    </div>
    
</body>
    
    