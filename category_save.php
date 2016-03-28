<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="css/stylesheetsad.css">
    


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
      <script>var table = $('#table_id').DataTable();
table.cell( {focused:true} ).data();</script>
          
  </head>
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
        <li><a href="#">User Account</a></li>
        <li><a href="#">Audit Trail</a></li>
        </ul>
        </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="sad_maintenance.php">Maintenance <span class="caret"></span></a>
          <ul class="dropdown-menu">
      <li><a href="sad_maintenance1.php">Materials</a></li>
      <li><a href="sad_maintenance3.php">Services</a></li>
      <li><a href="sad_category.php">Category</a></li>
      <li><a href="sad_variant.php">Variant</a></li>
      <li><a href="sad_packaging.php">Packaging</a></li>
      <li><a href="sad_unit.php">Unit</a></li>
      <li><a href="sad_servicecat.php">Service Category</a></li>
          </ul>
        </li>
    </ul>
    <?php
error_reporting(E_ALL&~E_NOTICE);
if($connect=@mysql_connect("localhost","root"))
 echo "<br/>";
 else
 die ("<br/>".@mysql_error());
 $connect=mysql_select_db("saddb");

      
?>
 
    </nav>
  </div>
    <div class="panel panel-info" style="margin:100px;">
    <div class="panel-heading">Adding New Record</div>
    <div class="panel-body">
    <form method="post" >
<input type="hidden" name="id" value="hidid">
    <p>Category Name: </p> 
        <input type="text" class="form-control" name="name">
<input type="hidden" name="cathid" value="hidcat">
<p>Description: </p><input type="type" class="form-control" name="desc">
<input type="hidden" name="deschid" value="hiddesc">
<button type="submit" class="btn btn-info" name="btnSave" style="margin-top:20px;margin-left:500px;">Save</button>
            </form>    
        </div>
    </div>
<?php
if(isset($_POST['btnSave']))
   {
  $id = date('ymd-HisA');
  $cat = $_POST['name'];
  $desc = $_POST['desc'];
mysql_query("insert into category_tbl values('".$id."','".$cat."','".$desc."')");
if (mysql_affected_rows() != 0)
{ 
?><div class="alert alert-success">
    <a href="sad_maintenance1.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> You saved a new record.
  </div>
<?php
}
}
?>

<div class="panel panel-default">
<div class="panel-body">            
  
    <table id="table_id" class="display">
    <thead>
        <th>#</th>
        <th>Category Name</th>
        <th>Description</th>
        <th>Actions</th>
    </thead>
<?php
 $content=mysql_query("select * from category_tbl");
  $total=mysql_affected_rows();
  for($x=0;$x<=$total-1;$x++)
  { 
 $no = $x + 1;
 $row=mysql_fetch_array($content);
 $id=$row['cat_id'];
 $category=$row['Category'];
 $desc=$row['Decsription'];
?>
        <tbody>
<tr>
<form method="post">
<td><?php echo $no; ?></td>
<td><?php echo $category; ?></td>
<td><?php echo $desc; ?></td>
        </form>
<td>    <form method="post" action="category_edit.php">
        <button type="submit" class="btn btn-success" name="btnEdit">Edit</button>
    </form>
</tr>
        </tbody>
    
        
        <?php 
   }
 
        ?>  
    </table>

</div>    
    
</div>
</body>