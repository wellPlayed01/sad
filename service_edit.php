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
 
    </nav>
    <?php
error_reporting(E_ALL&~E_NOTICE);
if($connect=@mysql_connect("localhost","root"))
 echo "<br>";
 else
 die ("<br/>".@mysql_error());
 $connect=mysql_select_db("saddb");

      
?>
  </div>
    <div class="panel panel-info" style="margin:100px;">
    <div class="panel-heading">Adding New Record</div>
    <div class="panel-body">
    <form method="post" >
<input type="hidden" name="idhid" value="hidid">
        <p>Service Category:</p> 
<?php              
 $content=mysql_query("select * from servcat_tbl");
?>
    <select class="form-control" name="cats">
    <?php while ($row = mysql_fetch_array($content)) {
 echo '<option value="'.$row['service_category'].'">'.$row['service_category'].'</option>';
echo '<input type="hidden" name="cathid" value="hidcat"';
 }?>
        </select>
<p>Service name: </p> 
        <input type="number" class="form-control" name="name">
<input type="hidden" name="namehid" value="hidname">
<p>Price: </p>
<input type="number" class="form-control" name="price">
<input type="hidden" name="pricehid" value="hidprice">
        </div>
    </div>
<button type="submit" class="btn btn-info" name="btnUpdate" style="margin-top:20px;margin-left:500px;">Update</button>
        
    <button type="submit" class="btn btn-danger" name="btnDelete" style="margin-top:20px;margin-right:400px;">Delete</button>
            </form>    
        </div>
    </div>
<?php    
if(isset($_POST['btnUpdate']))
{
            $hid = $_POST['idhid'];
            $cat=$_POST['cathid'];
            $name=$_POST['namehid'];
            $price=$_POST['pricehid'];
    mysql_query("update service_tbl set service_category= '$cat',service_name= '$name',service_price= '$price' where service_id= '$hid'");

}
   if(isset($_POST['btnDelete']))
    {
            $hid = $_POST['idhid'];
       ?>
    <div class="alert alert-info" style="margin:100px;">
    <center> Are you sure you want to delete <?php $hid; ?>?</center>
    </div>
    <form method="post">
    <button type="submit" class="btn btn-default" name="btnYes">Yes</button> 
    <button type="submit" class="btn btn-default" name="btnNo">No</button>
    <input type="hidden" name="hid" value="<?php echo $hid; ?>"
        </form>
    <?php
            if(isset($_POST['btnYes']))
            {
            $hid = $_POST['hid'];
            mysql_query("delete from service_tbl where service_id='$hid'")or die(mysql_error());
            echo "Record Deleted";
            }
       else if(isset($_POST['btnNo']))
       {
?>     
<div class="panel panel-default">
<div class="panel-body">            
  
    <table id="table_id" class="display">
    <thead>
        <th>#</th>
        <th>Service Category</th>
        <th>Service Name</th>
        <th>Price</th>
        <th>Actions</th>
    </thead>
<?php
 $content=mysql_query("select * from service_tbl");
  $total=mysql_affected_rows();
  for($x=0;$x<=$total-1;$x++)
  { 
 $no = $x + 1;
 $row=mysql_fetch_array($content);
 $id=$row['service_id'];
 $category=$row['service_category'];
 $name=$row['service_name'];
 $price=$row['service_price'];
?>
        <tbody>
<tr>
<form method="post">
<td><?php echo $no; ?></td>
<td><?php echo $category; ?></td>
<td><?php echo $name; ?></td>
<td><?php echo $price; ?></td>
        </form>
<td>    <form method="post" action="service_edit.php">
        <button type="submit" class="btn btn-success" name="btnEdit">Edit</button>
    </form>
</tr>
        </tbody>
    
        
      <?php 
   }
       }
   }
          ?>  
    </table>

</div>    
    
</div>
</body>