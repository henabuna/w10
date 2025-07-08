<?php
session_start();
if(!isset($_SESSION['lu']))
echo "<script>location='admin.php'</script>";
else
{
echo "";
}
?>

<html >
<head>
<title>addstudent</title>


<link href="../download-free-project-Student-infotmation-management-system-Project-in-php-free-download/style3.css" rel="stylesheet" type="text/css" />


<style>
input[type='submit'] 
{
float:right;				
cursor:pointer;
}




</style>




</head>
<body onLoad="f1()">
 <div ><img src="../download-free-project-Student-infotmation-management-system-Project-in-php-free-download/img/sis.jpg" style="width:100%;height:15%;"></div>


<hr>
<a href="../download-free-project-Student-infotmation-management-system-Project-in-php-free-download/studentview.php" ><img src="../download-free-project-Student-infotmation-management-system-Project-in-php-free-download/img/goback1.png" onMouseOver="this.src='img/goback.png';" onMouseOut="this.src='img/goback1.PNG';" height="35px" width="65px" align="left"></a>
<a href="../download-free-project-Student-infotmation-management-system-Project-in-php-free-download/logs.php" ><img src=img/logout1.png onmouseover="this.src='img/logout.png';" onmouseout="this.src='img/logout1.PNG';" height="35px" width="65px" align="right" align="right"></a>
<hr><br>
<div >
<h1>Add Student Details</h1>

<?php
include("validation.php");
include ("validation1.php");

include("connection.php");
if(isset($_POST["submit"]))
{
	
$sql="insert into student_info (sid,firstname,middlename,lastname,course,cyear,cast,dob,gender,address,contactno,emailid)
values
('$_POST[sid]','$_POST[firstname]','$_POST[middlename]','$_POST[lastname]','$_POST[course]','$_POST[cyear]','$_POST[cast]','$_POST[dob]','$_POST[gender]','$_POST[address]','$_POST[contactno]','$_POST[emailid]')";

if (!mysql_query($sql,$con))
  {
  echo "sid is repeated.<br>submit another sid";
  }
  else
  {
	  echo " Record Inserted Successfully.";
  }
}
$result = mysql_query("select * from student_info");
while($row1 = mysql_fetch_array($result))
  {
	$sid = $row1["sid"]+1;
	}


?>
 
<div id="login">
<form name="form1" method="post" action="" id="frm1" >
<table cellspacing="5" >
 <tr><td>
    <label for="sid">Sid</label></td><td>
    <input type="text" name="sid" id="input"   value="<?php echo $sid; ?>">
</td></tr><tr><td>
    <label for="firstname">First Name</label></td><td>
    <input type="text" name="firstname" id="input"    class="required" >
	
</td></tr>
<tr><td>
  <label for="middlename">Middle Name</label></td><td>
  <input type="text" name="middlename" id="input"  class="required" >
</td></tr>

<tr><td>
  <label for="lastname">Last Name</label></td><td>
  <input type="text" name="lastname" id="input"  class="required" >
</td></tr>
<tr><td>
  <label for="course">Select Course</label></td><td>
<select name="course" id="input">
<option  value="0" selected>Select Course</option>
<option  value="MCA" >MCA</option>
<option  value="MSC(CN)">Msc(CN)</option>
<option  value="MSC(CA)">Msc(CA)</option>
</select>
</td></tr>
<tr><td>
  <label for="cyear">Course Year</label></td><td>
  <select name="cyear" id="input" >
<option value="0" selected>Select Course Year</option>
<option value="First" >First </option>
<option value="Second">Second</option>
<option value="Third">Third</option>
<option value="Fourth">Fourth</option>
</select>
</td></tr>
<tr><td>
  <label for="cast">Cast</label></td><td>
  <select name="cast" id="input" >
<option value="0" selected>Slect your cast</option>
<option value="OPEN" >OPEN</option>
<option value="SC">SC</option>
<option value="SBC">SBC</option>
<option value="NT-1" >NT-1</option>
<option value="NT-2">NT-2</option>
<option value="OBC">OBC</option>
</select>
</td></tr>
<tr><td>
    <label for="dob">Date of Birth</label></td><td>
    <input type="date" name="dob"  id="input" class="required date"></td></tr>
<tr><td>
    <label for="gender">gender</label></td><td>  
 <input type="radio" name="gender" id="input" value="Male"  / >Male&nbsp
  <input type="radio" name="gender" id="input" value="Female" />Female
</td></tr>
<tr><td>
    <label for="address">Address</label></td><td>
    <input type="text" name="address" id="input"  class="required" >
</td></tr>

<tr><td>
    <label for="contactno">Contact No</label></td><td>
    <input type="text" name="contactno" id="input"  class="required number" minlength=10 maxlength=10>
</td></tr>
<tr><td>
    <label for="email">Email_id</label></td><td>
    <input type="email" name="emailid" id="input" class="required email"  >
</td><tr >
<td >
    <input type="submit" name="submit" id="input" value="Submit" onClick="return validate(course,cyear,cast)">
   
</td></tr>
</form><br>
</table>


 </div>
 
</body>
</html>





















