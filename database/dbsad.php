        <?php

$conn = new PDO("mysql:host=localhost;dbname=saddb","root","starwars");


if($connect=@mysql_connect("localhost","root","starwars"))
echo "<br>";
else
 die ("<br/>".@mysql_error());
 $connect=mysql_select_db("saddb");






?>
