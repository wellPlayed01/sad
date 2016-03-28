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

    ?>
       <br> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="align:center;margin-left:600px;margin-bottom:10px;">Add new record</button>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Materials</h4>
        </div>
        <div class="modal-body">
        <form method="post" >
        <p>Category:</p> 
    <select class="form-control" name="cate">
<?php              
    include("dbsad.php");
 echo "<option value='' selected disabled>Select Category...</option>";
 $content=mysql_query("select * from category_tbl");
$total=mysql_affected_rows();
for($x=0;$x<=$total-1;$x++)
{
?>
    <?php $row = mysql_fetch_array($content);
    $cat=$row['Category'];
 echo "<option>$cat</option>";
}?>
        </select>
<p>Brand name: </p> 
        <input type="text" class="form-control" name="name" placeholder="Brand Name">
<p>Variant: </p>
    <select class="form-control" name="var">
<?php
    include("dbsad.php");
 echo "<option value='' selected disabled>Select Variant...</option>";
 $content=mysql_query("select * from variant_tbl");
 $total=mysql_affected_rows();
for($x=0;$x<=$total-1;$x++)
{
?>
<?php $row = mysql_fetch_array($content);
 $variant=$row['Variant'];
 echo "<option>$variant</option>";
 }?>
        </select>
<p>Packaging: </p>
    <select class="form-control" name="pack">
<?php              
    include("dbsad.php");
  echo "<option value='' selected disabled>Select Packaging...</option>";
$content=mysql_query("select * from packaging_tbl");
 $total=mysql_affected_rows();
for($x=0;$x<=$total-1;$x++)
{
?>
    <?php $row = mysql_fetch_array($content);
    $packs=$row['Packaging'];
 echo "<option>$packs</option>";
 }?>
        </select>
<p>Unit of Measurement: </p>
    <select class="form-control" name="uni">
<?php              
    include("dbsad.php");
 echo "<option value='' selected disabled>Select Unit of Measurement...</option>";
 $content=mysql_query("select * from unit_tbl");
$total=mysql_affected_rows();
for($x=0;$x<=$total-1;$x++)
{
?>
    <?php $row = mysql_fetch_array($content);
    $un=$row['Unit'];
 echo "<option>$un</option>";
 }?>
        </select>
<p>Value of Unit: </p><input type="number" min="0.01" step="0.01" class="form-control" name="value" placeholder="Value of unit">
<input type="submit" class="btn btn-info" name="btnSave" style="margin-top:20px;margin-left:250px;" value="Save">
            </form>    
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>
    
<?php
if(isset($_POST['btnSave']))
{
include("dbsad.php");
  $id = date('ymd-HisA');
  $cat=($_POST['cate']);
  $name=($_POST['name']);
  $var=($_POST['var']);
  $pack=($_POST['pack']);
  $uni=($_POST['uni']);
  $value=($_POST['value']);
  mysql_query("insert into material_tbl values('".$id."','".$cat."','".$name."','".$var."','".$pack."','".$uni."','$value')");
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
include("dbsad.php");

?>
<div class="panel panel-default">
<div class="panel-body">            
  
    <table id="table_id" class="display">
    <thead>
        <th>#</th>
        <th>Category</th>
        <th>Brand Name</th>
        <th>Variant</th>
        <th>Packaging</th>
        <th>Measurement</th>
        <th>Actions</th>
    </thead>
        <tbody>
<?php
 $content=mysql_query("select * from material_tbl");
  $total=mysql_affected_rows();
  for($x=0;$x<=$total-1;$x++)
  { 
 $no = $x + 1;
 $row=mysql_fetch_array($content);
 $id=$row['material_id'];
 $category=$row['category'];
 $name=$row['brand_name'];
 $variant=$row['variant'];
 $packaging=$row['packaging'];
 $unit=$row['unit'];
 $value=$row['value'];
?>
<tr>
<td><?php echo $no; ?></td>
<td><?php echo $category; ?></td>
<td><?php echo $name; ?></td>
<td><?php echo $variant; ?></td>
<td><?php echo $packaging; ?></td>
<td><?php echo "$value $unit"; ?></td>
<td>
<form method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="hidden" name="category" value="<?php echo $category; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="variant" value="<?php echo $variant; ?>">
<input type="hidden" name="packaging" value="<?php echo $packaging; ?>">
<input type="hidden" name="unit" value="<?php echo $unit; ?>">
<input type="hidden" name="value" value="<?php echo $value; ?>">
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
</body>