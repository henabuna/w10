        <?php
$connection= mysql_connect("localhost", "root");
//check connection
     if(!$connection){

	 DIE('There is a problem with the system.  Please notify your system administrator.' );
	 }
//select database
mysql_select_db("sims",$connection);
?>
<html>
<head>
<meta name="description" content="Php Code for View, Search, Edit and Delete
Record" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete </title>
</head>
<body>
<?php
$id=$_GET["id"];
$query="delete from accept where id=$id";
mysql_query($query);
echo "<center>Successfully Deleted</center>";
  ?> 