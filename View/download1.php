
<?php

mysql_connect("localhost","root","");
mysql_select_db("sims");
if(isset($_GET['id'])) 
{
    $id =$_GET['id'];
// if id is set then get the file with the id from database
//$con = mysql_connect('localhost', 'root', '') or die(mysql_error());
//$db = mysql_select_db('olss', $con);
//$id    = $_GET['id'];
$query = "SELECT name, type, size, content " .
         "FROM upload WHERE id = '$id'";
$result = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($result);
header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
ob_clean();
flush();
echo $content;
mysql_close();
exit;
}
?>
