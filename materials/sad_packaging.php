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