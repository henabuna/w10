<html>
<head>
<link rel="stylesheet"type="text/css" href="but.css">
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
<img src="header.jpg" width="900" height="150" ></div>

<div id="navigation">

<CENTER><ul>
<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="index.php" class="level1"><span>Home</span></a></li>
			<ul class="menu menu-dropdown"><ul class="menu menu-dropdown"><li class="level1 item196 parent active current"><a href="#" class="level1 parent active current"><span>Manage Account</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item246 parent"><a href="createreg.php" class="level2 parent"><span>Create</span></a><ul class="level3"><li class="level3 item247"><a href="updatereg.php" class="level3"><span>Update</span></a><ul class="level3"><li class="level3 item247"><a href="deletereg.php" class="level3"><span>Delete</span></a></li></ul></li></ul></li>		 	
</ul>
			<li class="level1 item245 parent"><a href="post/regindex.php" class="level1 parent"><span>Information</span></a></li>
			<li class="level1 item245 parent"><a href="View/regview.php" class="level1 parent"><span>View Grades</span></a></li>
			<li class="level1 item245 parent"><a href="view_appeal.php" class="level1 parent"><span>Approve Appeal</span></a></li>
			<li class="level1 item245 parent"><a href="view_up.php" class="level1 parent"><span>Approve Update</span></a></li>
			<li class="level2 item198"><a href="view_info.php" class="level2"><span>Approve Grade</span></a></li>
			</li>
			<li class="level1 item245 parent"><a href="reglogin.php" class="level1 parent"><span>LogOut</span></a></li>
			 	
</ul>

</CENTER>
</div>
			 
</H3></B></div>
	<div id="content">	 
<?php

$con = mysql_connect("localhost","root","");

if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
  mysql_select_db("sims",$con); 

$query="SELECT*FROM reg";
$run=mysql_query($query);
echo "<TABLE border='1' color='green' bgcolor 'whiteblue'>";
echo"<TR><TD><B>id</B><td><B>course</b><td><b>department</b><td><B>instructor</B><td><B>old result</B><td><B>new result</b><td><b>approve</TR>";
while($row=mysql_fetch_array($run))
{
$id=$row['id'];
$cr=$row['course'];
$dp=$row['department'];
$amount=$row['instructor'];
$new=$row['new'];
$old=$row['old'];
?>
<tr>
<td><?php echo $id;?></td>
<td><?php echo $cr;?></td>
<td><?php echo $dp;?></td>
<td><?php echo $amount;?></td>
<td><?php echo $new;?></td>
<td><?php echo $old;?></td>


<?php
print("<td style='height:30px;' align = 'center' width = '1'><a href = 'updategrade.php?key=".$id."'>approve</a></td>
		");
}
echo "</tr>";
echo "</TABLE>";

?>

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
    <div id="footerPancss"><a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">css</a></div>
  </div>
</div>
</body>
</center>
</html>