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
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="datatables/jquery.dataTables.css">
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
        <script src="js/jquery.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.js"></script>
 
      <script type="text/javascript" charset="utf8" src="datatables/jquery.dataTables.js"></script>
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
    <img src="imgs/Salon360.jpg" alt="Cover" width="100%" height="250">
        </div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Transactions <span class="caret"></span></a>             <ul class="dropdown-menu">
      <li><a href="service_layout.php">Services</a></li>
      <li><a href="purchase_layout.php">Purchase Order</a></li>
      <li><a href="receive_layout.php">Receive Delivery</a></li>
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
      <li><a href="sad_materials.php">Materials</a></li>
      <li><a href="sad_service.php">Services</a></li>
      <li><a href="sad_promo.php">Seasonal Promo</a></li>
          </ul>
        </li>
    </ul>
  </div>
    </nav>
    
    <h5 style="margin-left:1250px;"><a href="logout.php">Logout here!</a></h5>

        <div class="panel panel-danger" style="width:60%;margin-left:20%;">
      <div class="panel-heading" style="text-align:center;">PURCHASE ORDER</div>
      <div class="panel-body">
          <label style="margin-left:45%">SUPPLIER</label>
                <form method="post">
                    <fieldset disabled>
                Company Name: <input type="text" class="form-control" style="width:300;margin-left:35%;">
                    </fieldset>
                    <fieldset disabled>
                Address: <input type="text" class="form-control" style="width:300;margin-left:35%;" name="mtrctgry" placeholder="Sally">
                    </fieldset>
                    <fieldset disabled>
                City Zip Code: <input type="text" class="form-control" style="width:300;margin-left:35%;" name="mtrctgry" placeholder="Haircut">
                    </fieldset>
                    <fieldset disabled>
                Phone: <input type="text" class="form-control" style="width:300;margin-left:35%;" name="mtrctgry" placeholder="Hair">
                    </fieldset><br>
          <label style="margin-left:45%">SHIP TO</label>
                    <fieldset disabled>
                Product Used: <input type="text" class="form-control" style="width:300;margin-left:35%;" name="mtrctgry">
                    </fieldset>
                    
          

          <fieldset disabled>
                Admin Name: <input type="text" class="form-control" style="width:300;margin-left:35%;" name="mtrctgry" placeholder="Haircut">
                    </fieldset>
                    <fieldset disabled>
                Company Name: <input type="text" class="form-control" style="width:300;margin-left:35%;" name="mtrctgry" placeholder="50.00">
                    </fieldset>
                Address: <input type="text" class="form-control" style="width:300;margin-left:35%;" name="mtrctgry" placeholder="50.00">
                Phone: <input type="text" class="form-control" style="width:300;margin-left:35%;" name="mtrctgry" placeholder="50.00">
                </form><br>
          <table style="width:100%;">
          <thead>
          <th> Item #</th>
          <th> Name</th>
          <th> QTY</th>
          <th> Price</th>
          <th> Total</th>
        </thead>
              <tbody>
                  <tr>
              <td><br></td>
              <td><br></td>
              <td><br></td>
              <td><br></td>
              <td><br></td>
                  </tr>
              </tbody>
          </table><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <label style="margin-left:70%">SUBTOTAL:</label>
          <input type="text" class="form-control" style="width:100;margin-left:80%;" name="mtrctgry" placeholder="50.00">
          <label style="margin-left:70%">TAX RATE:</label>
          <input type="text" class="form-control" style="width:100;margin-left:80%;" name="mtrctgry" placeholder="50.00">
          <label style="margin-left:75%">TAX:</label>
          <input type="text" class="form-control" style="width:100;margin-left:80%;" name="mtrctgry" placeholder="50.00">
          <label style="margin-left:75%">TOTAL:</label>
          <input type="text" class="form-control" style="width:100;margin-left:80%;" name="mtrctgry" placeholder="50.00">
          <label style="margin-left:10%">AUTHORIZED BY:</label><br>
          <label style="margin-left:20%">SALON 360</label><br>
          <label style="margin-left:20%">DATE</label>          <br><br><br><br><br>
                              <fieldset disabled>
                <button type="submit" class="btn btn-info" name="btnSave" style="margin-top:20px;margin-left:50%;">Proceed</button>
                    </fieldset>
                <br><br>



</div>
    </div>
    </div>    
</body>