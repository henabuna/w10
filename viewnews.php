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
<body>
<div id="">
<div>
<img src="header.jpg" width="900" height="150" ></div>

<div id="navigation">
<CENTER><ul>
             
			<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="index.php" class="level1"><span>Home</span></a></li>
			 						 			 
		
</CENTER></div>
			 
</H3></B></div>
	<div id="content">
	<left><left> 
 <?php

$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("sims",$con)or die(mysql_error());
$qr="select title from event LIMIT 10;";

$rs=mysql_query($qr);
echo "<table align='center' border='1' style='border-radius:15px' width='700px'>";
$i=0;
echo "<tr class='tableheader' >";
while ($i < mysql_num_fields($rs)-1)
{
echo "<td>", mysql_field_name($rs,$i),"</td>";

$i++;

}
echo "<td>news:";
echo "</tr>";

$i = 0;
$id = "";
while ($row= mysql_fetch_array($rs))
{
if($i % 2 == 0)

echo "<tr class='even' >";
else
echo"<tr>";
$i++;
echo"<td>",$row["title"],"</td>";
echo "</tr>";
}

echo "</table>";
$id= trim($id)

?></left></left>

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