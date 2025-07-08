<?php
session_start();
$con = mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("sims", $con );

$UserName=$_REQUEST['name'];
$Password=$_REQUEST['id'];

$UserName=mysql_real_escape_string($UserName);
$Password=mysql_real_escape_string($Password);
$login=mysql_query("SELECT UserName,Password
   FROM depheadlogin where UserName='$UserName' and Password='$Password'");
$num_row=mysql_num_rows($login);
$row=mysql_fetch_array($login);
if($num_row==1){
header('location:post/depindex.php');}

else
{
$message="invalid username or password please enter valid username and passwords";
echo "<script type='text/javascript'>alert('$message');
</script>";
echo "<script>window.location='depheadlogin.html';</script>";

             
}
 
 mysql_close($con);

?>