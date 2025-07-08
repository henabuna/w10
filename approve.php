<?php
session_start();
$con = mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("sims", $con );
if($log != "log"){
	header ("Location: viewappeal1.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "insert into accept values('$id','$department','$instructor','$appeal');
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'viewappeal1.php'</script>";
?>