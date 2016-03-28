<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

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
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.js"></script>
 
      <script type="text/javascript" charset="utf8" src="datatables/jquery.dataTables.js"></script>
      <script> $(document).ready(function(){ $('#table_id').DataTable();});</script>
      <script> $('#table_id').DataTable( {select: true } );</script>
      <script> var table = $('#table_id').DataTable();
table.rows('.important').select();
      </script>
      <script>
          var table = $('#table_id').DataTable();
table.cell( {focused:true} ).data();</script>
      <script>
      $(document).ready(function() {
    var table = $('#table_id').DataTable();
 
    $('#table_id tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    </script>


  </head>
  <style>
      #bodycontent{
      background-color: beige;
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
      <li><a href="sad_maintenance1.php">Materials</a></li>
      <li><a href="sad_maintenance3.php">Services</a></li>
      <li><a href="sad_servicecat.php">Seasonal Promo</a></li>
          </ul>
        </li>
    </ul>
 
    </nav>
  </div>

<?php 
if(isset($_POST['btnEdit']))
{
    include "dbsad.php";//database connection
$id=$_GET['id'];
    $order = "SELECT * FROM user_tbl 
where userid='$id'";
      $result = mysql_query($order);
      $row = mysql_fetch_array($result);
    ?>
    <div class="panel panel-success" style="width:80%;margin-left:10%;">
      <div class="panel-heading" style="text-align:center;">UPDATE</div>
      <div class="panel-body">
    <form method="post">
    <input type="hidden" value="<?php echo "$row[userid]" ?>" name="id">
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
    <input type="hidden" value="<?php echo $txtid; ?>" name="id">        
    <input type="hidden" value="<?php echo $txtfirst1; ?>" name="first">        
    <input type="hidden" value="<?php echo $txtlast1; ?>" name="last">        
    <input type="hidden" value="<?php echo $txtuser1; ?>" name="user">        
    <input type="hidden" value="<?php echo $txtpass2; ?>" name="pass2">        
    <input type="hidden" value="<?php echo $txtans1; ?>" name="ans">        
          <input type="submit" class="btn btn-success" style="margin-left:45%" name="bupdate" value="Update">
          </form>
    </div>
    </div>
        
</div>
