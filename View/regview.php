<html>
<head>
<link rel="stylesheet"type="text/css" href="../but.css">
<script type="text/javascript">
function search(){
var data1=document.search.value.value;

if(data1=="")
{
alert("please  insert your id !");

return false;
}
}
</script>
</head>
<center>
<body bgcolor="#CCCCCC">
<div id="">
<div>
<img src="../header.jpg" width="900" height="150" ></div>

<div id="navigation">

<CENTER><ul>
<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="../index.php" class="level1"><span>Home</span></a></li>
			<ul class="menu menu-dropdown"><ul class="menu menu-dropdown"><li class="level1 item196 parent active current"><a href="#" class="level1 parent active current"><span>Manage Account</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item246 parent"><a href="../createreg.php" class="level2 parent"><span>Create</span></a><ul class="level3"><li class="level3 item247"><a href="../updatereg.php" class="level3"><span>Update</span></a><ul class="level3"><li class="level3 item247"><a href="../deletereg.php" class="level3"><span>Delete</span></a></li></ul></li></ul></li>		 	
</ul>
			<li class="level1 item245 parent"><a href="../post/regindex.php" class="level1 parent"><span>Information</span></a></li>
			<li class="level1 item245 parent"><a href="regview.php" class="level1 parent"><span>View Grades</span></a></li>
			<li class="level1 item245 parent"><a href="../view_appeal.php" class="level1 parent"><span>Approve Appeal</span></a></li>
			<li class="level1 item245 parent"><a href="../view_up.php" class="level1 parent"><span>Approve Update</span></a></li>
			<li class="level2 item198"><a href="../view_info.php" class="level2"><span>Approve Grade</span></a></li>
			</li>
			<li class="level1 item245 parent"><a href="../reglogin.php" class="level1 parent"><span>LogOut</span></a></li>
			 	
</ul>

</CENTER>
</div>
			 
</H3></B></div>
	<div id="content">
	
<?php

mysql_connect("localhost","root","");
mysql_select_db("sims");
$sql="SELECT * FROM uploads";
$res=mysql_query($sql) or die(mysql_error());
?>
<html>
<head>
<style type="text/css">
#viewdata table{
    border:1px solid #aaa;
}
#viewdata th{background:#aaa;}
#viewdata td{background:#efefef;}
#viewdata th,td{padding:5px;text-align:left;}
</style>
<table id="viewdata">
<tr>
<th>Id</th>
<th>Name</th>
<th>Size</th>

<th colspan=2>Action</th>
</tr>
<?php
while($row=mysql_fetch_assoc($res))
{
echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['name'];
echo "</td><td>";
echo number_format(($row['size']/1024),2) . " Kb";

echo "
<td><a href=\"../View/download1.php?id=".$row['id']."\">download</a></td></tr>";
}
mysql_close();
?>
</table>


</div>
<div id="footermainPan">
  <div id="footerPan">
    <ul>
    <li><a href="#">Home</a>| </li>
    <li><a href="#">About us</a> | </li>
    <li><a href="#">Network</a>| </li>
    <li><a href="#">Submission</a> | </li>
    <li><a href="#">Archives</a> |</li>
  <li><a href="#">Finance</a> |</li>
  <li><a href="#">Contact</a></li>
  </ul>
  <p class="copyright">>>gconsultant all right reaserved</p>
  
  <div id="footerPanhtml"><a href="http://validator.w3.org/check?uri=referer" target="_blank">html</a></div>
    <div id="footerPancss"><a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">css</a></div>  </div>
</div>
</body>
</center>
</html>
