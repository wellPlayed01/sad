        <?php
if($connect=@mysql_connect("localhost","root","starwars"))
echo "<br>";
else
 die ("<br/>".@mysql_error());
 $connect=mysql_select_db("saddb");
?>
