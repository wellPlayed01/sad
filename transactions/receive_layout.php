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
    <link href="../plugins/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="../plugins/datatables/jquery.dataTables.css">
	<link rel="stylesheet" href="../plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/css/stylesheetsad.css">
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="bootstrap/html5shiv.js"></script>
      <script src="bootstrap/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../plugins/js/jquery-1.9.0.min.js"></script>
        <script src="../plugins/js/jquery.min.js"></script>
    <script src="../plugins/js/jquery-1.11.1.min.js"></script>
    <script src="../plugins/js/bootstrap.min.js"></script>
      <script src="../plugins/js/jquery.js"></script>
 
      <script type="text/javascript" charset="utf8" src="../plugins/datatables/jquery.dataTables.js"></script>
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
        <?php include('../include/navigation.php'); ?>
    
    <h5 style="margin-left:1250px;"><a href="log/logout.php">Logout here!</a></h5>

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
          <label style="margin-left:10%">RECEIVED BY:</label><br>
          <label style="margin-left:20%">PERSON-IN-CHARGE</label><br>
          <label style="margin-left:20%">DATE</label>          <br><br><br><br><br>
                              <fieldset disabled>
                <button type="submit" class="btn btn-info" name="btnSave" style="margin-top:20px;margin-left:50%;">Proceed</button>
                    </fieldset>
                <br><br>



</div>
    </div>
    </div>    
</body>