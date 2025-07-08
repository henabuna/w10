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
			  <li class="level1 item383"><a href="#" class="level1"><span>Manage accounts</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item197"><a href="deleteown.php" class="level2 parent"><span>Delete</span></a></li><li class="level2 item246 parent"><a href="updateown.php" class="level2 parent"><span>Update</span></a></li></ul>
			  <li class="level1 item245 parent"><a href="post/inindex.php" class="level1 parent"><span>Information</span></a></li>
			  <li class="level1 item383"><a href="#" class="level1"><span>View</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item198"><a href="instructorpage.php" class="level2"><span>schedule</span></a></li>
			  <li class="level2 item198"><a href="viewappeal.php" class="level2"><span>Appeal</span></a></li>
			  </li><li class="level1 item196 parent active current"><a href="grade.php" class="level1 parent active current"><span>Grade</span></a>
			</ul></div></div></div></div></li>
			<li class="level1 item383"><a href="#" class="level1"><span>Upload</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item198"><a href="Upload/Upload.php" class="level2"><span>File</span></a></li>
			  </li><li class="level1 item196 parent active current"><a href="Upload/Uploadreg.php" class="level1 parent active current"><span>Grade</span></a>
			</ul></div></div></div></div></li>
 			  <nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="up.php" class="level1"><span>updategrade</span></a></li>
			  <li class="level1 item383"><a href="instructorlogin.php" class="level1"><span>Logout</span></a></li>
			  
			 	
</ul>
</CENTER></div>
			 
</H3></B></div>
	<div id="content">
	<left>
<form action="viewappeal.php" name="search" method="get" onSubmit="return validate();">
<input type="text"  name="value" placeholder="instructor name" />
<input type="submit" name="search" value="search now" /> 
</form>
	  </left>	 
<?php
mysql_connect("localhost","root","");
mysql_select_db("sims");
if(isset($_GET['search']))
{
$search_value=$_GET['value'];
$query="SELECT*FROM appeal WHERE instructor LIKE'%$search_value%'";
$run=mysql_query($query);
echo "<TABLE border='1' color='green' bgcolor 'whiteblue'>";
echo"<TR><TD><B>id</B><td><b>course</b><td><B>instructor name</B><td><B>appeal</B><td><b>approved</b></TR>";
while($row=mysql_fetch_array($run))
{
$id=$row['id'];
$i=$row['course'];
$amount=$row['instructor'];
$type=$row['appeal'];
$typ=$row['approved'];
echo "<TR><TD>";
echo $row["id"];
echo "<TD>";
echo $row["course"];
echo "<TD>";
echo $row["instructor"];
echo "<TD>";
echo $row["appeal"];
echo "<TD>";
echo $row["approved"];

}
echo "</TABLE>";
}
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