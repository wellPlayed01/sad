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

    <form method="post">
  <div class="btn-group" style="margin-left:475px;">
    <input type="submit" class="btn btn-warning" name="btncat" value="Category">
    <input type="submit" class="btn btn-warning" name="btnvar" value="Variant">
    <input type="submit" class="btn btn-warning" name="btnpack" value="Packaging">
    <input type="submit" class="btn btn-warning" name="btnunit" value="Unit of measurement">
  </div>    
      </form>
    <?php
    if(isset($_POST['btncat']))
    {
    header("Location: sad_category.php");
    }
    if(isset($_POST['btnvar']))
    {
    header("Location: sad_variant.php");
    }
    if(isset($_POST['btnpack']))
    {
    header("Location: sad_packaging.php");
    }
    if(isset($_POST['btnunit']))
    {
    header("Location: sad_unit.php");
    }

    ?>    <form method="post" action="packaging_save.php">
        <button type="submit" class="btn btn-info btn-lg" name="btnnew" style="align:center;margin-left:600px;margin-bottom:10px;">Add new record</button>
    </form>
<div class="panel panel-default">
<div class="panel-body">            
  
    <table id="table_id" class="display">
    <thead>
        <th>#</th>
        <th>Packaging</th>
        <th>Description</th>
        <th>Actions</th>
    </thead>
<?php
 $content=mysql_query("select * from packaging_tbl");
  $total=mysql_affected_rows();
  for($x=0;$x<=$total-1;$x++)
  { 
 $no = $x + 1;
 $row=mysql_fetch_array($content);
 $id=$row['var_id'];
 $pack=$row['packaging'];
 $desc=$row['Description'];
?>
        <tbody>
<tr>
<form method="post">
<td><?php echo $no; ?></td>
<td><?php echo $pack; ?></td>
<td><?php echo $desc; ?></td>
        </form>
<td>    <form method="post" action="variant_edit.php">
        <button type="submit" class="btn btn-success" name="btnEdit">Edit</button>
        <input type="hidden" name="hidid" value="<?php echo $id; ?>">
        <input type="hidden" name="hidpack" value="<?php echo $pack; ?>">
        <input type="hidden" name="hiddesc" value="<?php echo $desc; ?>">
    </form>
               </td>
</tr>
        </tbody>
    
        
        <?php 
   }
 
        ?>  
    </table>

</div>    
    
</div>
</body>