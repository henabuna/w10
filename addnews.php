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
			 						 			 
		
</CENTER></div>
			 
</H3></B></div>
	<div id="content">
	<left>
	<br>
<form action="addnews.php" method="post" name="form1" >
<textarea rows="6" cols="40" name="body" onKeyPress="return ValidateAlpha(event)" required/></textarea>
<br><br>
<input type="submit" name="submit" value="submit"> <input name="reset" type="reset" value="Reset"> 
</form>
		</left>	 
<?php
$con = mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("sims", $con );
if (isset($_POST["submit"]))
{
$body =$_POST["body"];




$query="INSERT INTO event (title)
		VALUES('$body') ";
		$rs=mysql_query($query);

if (!($rs))
{

echo "data Insertion failed".mysql_error();
             
}

else
{
 echo "<b><i><pre>                                                           news sccessfully posted!! </pre></i></b>";
 }
 }
 mysql_close($con);

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