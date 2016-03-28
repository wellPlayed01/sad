<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer</title>

    <link href="../plugins/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/datatables/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="../plugins/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../plugins/css/stylesheetsad.css">
    


    <script src="../plugins/js/jquery-1.9.0.min.js"></script>
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
<body>
    <div class="topcontent">

    <?php include('../include/navigation.php'); ?>

    <?php
error_reporting(E_ALL&~E_NOTICE);
if($connect=@mysql_connect("localhost","root"))
 echo "<br/>";
 else
 die ("<br/>".@mysql_error());
 $connect=mysql_select_db("saddb");

      
?>
 
  </div>
    <form method="post" action="servicecat_save.php">
        <button type="submit" class="btn btn-info btn-lg" name="btnnew" style="align:center;margin-left:600px;margin-bottom:10px;">Add new record</button>
    </form>
<div class="panel panel-default">
<div class="panel-body">            
  
    <table id="table_id" class="display">
    <thead>
        <th>#</th>
        <th>Service Category Name</th>
        <th>Description</th>
        <th>Actions</th>
    </thead>
<?php
 $content=mysql_query("select * from servcat_tbl");
  $total=mysql_affected_rows();
  for($x=0;$x<=$total-1;$x++)
  { 
 $no = $x + 1;
 $row=mysql_fetch_array($content);
 $id=$row['servcat_id'];
 $cat=$row['Category'];
 $desc=$row['Description'];
?>
        <tbody>
<tr>
<form method="post">
<td><?php echo $no; ?></td>
<td><?php echo $cat; ?></td>
<td><?php echo $desc; ?></td>
        </form>
<td>    <form method="post" action="servicecat_edit.php">
        <button type="submit" class="btn btn-success" name="btnEdit">Edit</button>
        <input type="hidden" name="hidid" value="<?php echo $id; ?>">
        <input type="hidden" name="hidcat" value="<?php echo $cat; ?>">
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