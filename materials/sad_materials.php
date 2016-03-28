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





    <!--Bootstrap CSS BELOW-->
    <link href="../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />  
    <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />     
    <!--JQUERY BELOW-->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!--Datatables BELOW-->
    <script src="../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <!--Datatables Bootsrap CSS BELOW -->
    <script src="../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>   
    <!--Datatables Javascript BELLOW -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>

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
    header("Location: index.php");
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
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Materials</h4>
        </div>
        <div class="modal-body">



        <div class="row">
          <div id="cate_div" class="col-sm-6 col-xs-12">

              <p>Category:</p> 
              <select class="form-control" id="cate" name="cate">
                <?php              
                    include("../database/dbsad.php");
                 echo "<option value='none' selected >Select Category...</option>";
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


          </div>

          <div class="col-sm-6 col-xs-12">
            <div id="name_div">

            <p>Brand name: </p> 
                    <input type="text" class="form-control" id="name" name="name" placeholder="Brand Name">
            </div>            
          </div>   
                 
        </div><!--ROW-->

        <div class="row">
        <div class="col-sm-6">
          
        <div id="var_div">
        
        <p>Variant: </p>
            <select class="form-control" id="var" name="var">
          <?php
              include("database/dbsad.php");
           echo "<option value='none' selected>Select Variant...</option>";
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
        </div>

        </div>
          <div class="col-sm-6">
        <div id="pack_div"

        <p>Packaging: </p>
            <select class="form-control" id="pack" name="pack">
        <?php              
            include("database/dbsad.php");
          echo "<option value='none' selected>Select Packaging...</option>";
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
        </div>
            
          </div>
        </div><!--row-->

        <div class="row">
          <div class="col-sm-6">
        <div id="uni_div">

      <p>Unit of Measurement: </p>
          <select class="form-control" id="uni" name="uni">
      <?php              
          include("database/dbsad.php");
       echo "<option value='none' selected>Select Unit of Measurement...</option>";
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

          </div>
          </div>
          <div class="col-sm-6">

          <div id="value_div">

          <p>Value of Unit: </p><input type="number" min="0.01" step="0.01" class="form-control" id="value" name="value" placeholder="Value of unit">

         </div>

          </div>
        </div>


<button class="btn btn-info btn-lg" onclick="save(this.value)" id="btnSave"  name="btnSave" style="margin-top:20px;margin-left:250px;" value="create"> SAVE </button>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>







<div class="panel panel-default">
<div class="panel-body">            
  
    <table id="table_id" class="table table-condensed table-hover">
    <thead>
        <th>#</th>
        <th>Category</th>
        <th>Brand Name</th>
        <th>Variant</th>
        <th>Packaging</th>
        <th>Measurement</th>
        <th></th>
        <th></th>
    </thead>
    
        
    </table>
      </div>
    </div>
</body>

<script type="text/javascript">

var table_main = $('#table_id').dataTable();



populate_table_main();

function populate_table_main(){ 
  //ajax now
  $.ajax ({
    type: "POST",
    url: "populate_table_main.php",
    dataType: 'json',      
    cache: false,
    success: function(s)
    {
      table_main.fnClearTable();     

      for(var i = 0; i < s.length; i++) 
      { 
        table_main.fnAddData
        ([
          i+1,s[i][1],s[i][2],s[i][3],s[i][4],s[i][5],
          '<button onclick="table_row_update(this.value)" value="'+s[i][0]+'" class="btn btn-xs btn-info"> EDIT </button>',
          '<button onclick="table_row_delete(this.value)" value="'+s[i][0]+'" class="btn btn-xs btn-danger"> DELETE </button>',
        ],false); 
        table_main.fnDraw();

      }       
    }  
  }); 
  //ajax end  
} 

function table_row_update(id){
  $('#btnSave').val(id);
  //ajax now
  $.ajax ({
    type: "POST",
    url: "fetch.php",
    data: 'id='+id,
    dataType: 'json',      
    cache: false,
    success: function(s){    
      $('#cate').val(s[0][1]);
      $('#name').val(s[0][2]);
      $('#var').val(s[0][3]);
      $('#pack').val(s[0][4]);
      $('#uni').val(s[0][5]);
      $('#value').val(s[0][6]);
      $('#myModal').modal('show');
    }  
  }); 
  //ajax end

}


function save(mode){
  if(ivalidate()==false){}
  else{

  var cat = $('#cate').val();
  var name = $('#name').val();
  var variant = $('#var').val();
  var pack = $('#pack').val();
  var unit = $('#uni').val();
  var value = $('#value').val();
  var dataString = 'cat='+cat+'&name='+name+'&variant='+variant+'&pack='+pack+'&unit='+unit+'&value='+value;

  if(mode=='create'){ // will SAVE
      //ajax now
      $.ajax ({
        type: "POST",
        url: "create.php",
        data: dataString,
        dataType: 'json',      
        cache: false,
        success: function(s){    
          populate_table_main();
          reset();          
          $('#myModal').modal('hide');
          alert('Saved');
        }  
      }); 
      //ajax end  
  }
  else{ // will UPDATE
      //ajax now
      $.ajax ({
        type: "POST",
        url: "update.php",
        data: dataString+'&id='+$('#btnSave').val(),
        dataType: 'json',      
        cache: false,
        success: function(s){    
          populate_table_main();
          reset();          
          $('#myModal').modal('hide');
          alert('SUCCESS: Update');
        }  
      }); 
      //ajax end  
  }


  }
}

function ivalidate(){

  var truth_value = true;

  if($('#cate').val()=='none'){
    $('#cate_div').addClass('has-error');
    truth_value = false;
  }
  else
    $('#cate_div').removeClass('has-error');

  if($('#name').val()==''){
    $('#name_div').addClass('has-error');
    truth_value = false;
  }
  else
    $('#name_div').removeClass('has-error');  


  if($('#var').val()=='none'){
    $('#var_div').addClass('has-error');
    truth_value = false;
  }
  else
    $('#var_div').removeClass('has-error');  

  if($('#pack').val()=='none'){
    $('#pack_div').addClass('has-error');
    truth_value = false;
  }
  else
    $('#pack_div').removeClass('has-error');  

  if($('#uni').val()=='none'){
    $('#uni_div').addClass('has-error');
    truth_value = false;
  }
  else
    $('#uni_div').removeClass('has-error');  

  if($('#value').val()==''){
    $('#value_div').addClass('has-error');
    truth_value = false;
  }
  else if($('#value').val()>999999){
    $('#value_div').addClass('has-error');
    truth_value = false;
  }  
  else
    $('#value_div').removeClass('has-error');  

  return truth_value;
}

function reset(){
  $('#btnSave').val('create');
  $('#cate').val('none');
  $('#name').val('');
  $('#var').val('none');
  $('#pack').val('none');
  $('#uni').val('none');
  $('#value').val('');
}

</script>