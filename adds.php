<html>
<head>
<link rel="stylesheet"type="text/css" href="but.css">
<script type="text/javascript" >
function register(){
id=document.frm.id.value;
fn=document.frm.fn.value;
ln=document.frm.ln.value;
y=document.frm.y.value;
dep=document.frm.dep.value;
c=document.frm.c.value;
r=document.frm.r.value;
if(id=="")
{
alert("please enter course name !");
return false;
}
if(!isNaN(document.frm.id.value)){
alert("Sorry!course name  must be only characters");
return false;
}
if(ln=="")
{
alert("please enter start time !");
return false;
}

if(y=="")
{
alert("please enter end time !");
return false;
}
if(b=="")
{
alert("please enter block number !");
return false;
}
if(isNaN(document.frm.b.value))
{
alert("Sorry!block number must be a number");
return false;
}
if(r=="")
{
alert("please enter room number !");
return false;
}
if(isNaN(document.frm.r.value))
{
alert("Sorry!room number must be a number");
return false;
}
if(d=="")
{
alert("please enter the date !");
return false;
}
if(st=="")
{
alert("please enter schedule type !");
return false;
}
/*if(!isNaN(document.frm.d.value))
{
alert("Sorry!result must be only characters");
return false;
}*/

}
</script> 
</head>
<center>
<body bgcolor="#CCCCCC">

<div>
<img src="header.jpg" width="900" height="150" ></div>

<div id="navigation">

<CENTER><ul>
             
			<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="index.php" class="level1"><span>Home</span></a></li>
			<ul class="menu menu-dropdown"><ul class="menu menu-dropdown"><li class="level1 item196 parent active current"><a href="#" class="level1 parent active current"><span>Manage Account</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item246 parent"><a href="createinstructor.php" class="level2 parent"><span>Create</span></a><ul class="level3"><li class="level3 item247"><a href="updateinstructor.php" class="level3"><span>Update</span></a><ul class="level3"><li class="level3 item247"><a href="deleteinstructor.php" class="level3"><span>Delete</span></a></li></ul></li></ul></li></ul>
<li class="level1 item383"><a href="post/depindex.php" class="level1"><span>Information</span></a></li>
</ul><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"></div></div></div></div></li>
<li class="level1 item383"><a href="adds.php" class="level1"><span>Add Schedule</span></a></li>
			<li class="level1 item383"><a href="depheadlogin.html" class="level1"><span>LogOut</span></a></li>

</CENTER>
</div>
<?php
$con = mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("sims", $con );
if (isset($_POST["submit"]))
{
$dp =$_POST["dp"];
$id =$_POST["id"];
$fn =$_POST["fn"];
$ln =$_POST["ln"];
$y =$_POST["y"];
$dep =$_POST["dep"];
$c =$_POST["c"];
$r =$_POST["r"];
$b =$_POST["b"];
$d =$_POST["d"];
$day =$_POST["day"];
$s =$_POST["s"];
$st =$_POST["st"];

 
		
$result=mysql_query("select * from schedule where
day like '$day'  
and starttime='$ln'
and endtime='$y'") or die(mysql_error());
$count=mysql_num_rows($result);
$teacher1=mysql_fetch_array($result);
//$teacher_n=$teacher1['schedule'];


if($count==1)
{
echo "this schedule already exist!";
}
//$sql="INSERT INTO schedule (department,course,instructor,starttime,endtime,year,semester,block,room,section,date,day,type)
// VALUES ('$_POST[dp]','$_POST[id]','$_POST[fn]','$_POST[ln]','$_POST[y]','$_POST[dep]','$_POST[c]','$_POST[b]','$_POST[r]','$_POST[s]','$_POST[d]','$_POST[day]','$_POST[st]')";
	else
{
$sql="INSERT INTO schedule (department,course,instructor,starttime,endtime,year,semester,block,room,section,date,day,type)
 VALUES ('$_POST[dp]','$_POST[id]','$_POST[fn]','$_POST[ln]','$_POST[y]','$_POST[dep]','$_POST[c]','$_POST[b]','$_POST[r]','$_POST[s]','$_POST[d]','$_POST[day]','$_POST[st]')";
		$rs=mysql_query($sql);
		 if (!($rs))
{

echo "insertion failed";
             
}

 echo "successfully inserted";
 }
 }
 mysql_close($con);

?>	
<div id="content" height="400" >
<div class="container" >
  <div class="row">
      <div class="panel panel-default">
        <div class="page-header">
          <h1 style = "margin-left:50px;">Add <small>Schedule</small></h1>
        </div>
        <div class="panel-body">
          <form name="frm" method="post" action="adds.php"  onSubmit="return register()" class="form-horizontal" role="form" onClick="return check(this.form)">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <select name="dp" class="dp">
	<option>pre eng</option>
	<option>civil eng</option>
	<option>hydrolics</option>
	<option>chemical eng</option>
	<option>mechanical eng</option>
	<option>electrical eng</option>
	<option>computer science</option>
	<option>Information Technology</option>
	</select>
              </div>
            </div>
            <br>
			<div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text" id="username" name="id" class="form-control" placeholder="course" pattern="\D{6,40}" required x-moz-errormessage="Please Enter Course Name With Only letters  Above 6 characters" title="Please Enter Letter Letter only " >
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text" id="text" name="fn" class="form-control" placeholder="Instructor" pattern="\D{6,40}" required x-moz-errormessage="Please Enter Instructor Name With Only letters  Above 6 characters" title="Please Enter Letter Letter only " name="Department">
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <select name="ln" class="form-control" placeholder="start_time" >
				<option>2:10 am</option>
				<option>3:00 am</option>
				<option>3:50 am</option>
				<option>4:40 am</option>
				<option>5:30 am</option>
				<option>6:20 am</option>
				<option>8:10 am</option>
				<option>9:00 am</option>
				<option>9:50 am</option>
				<option>10:40 am</option>
				<option>11:30 am</option>
				</select>
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <select name="y" class="form-control" placeholder="end_time" >
				<option>3:00 am</option>
				<option>3:50 am</option>
				<option>4:40 am</option>
				<option>5:30 am</option>
				<option>6:20 am</option>
				<option>8:10 am</option>
				<option>9:00 am</option>
				<option>9:50 am</option>
				<option>10:40 am</option>
				<option>11:30 am</option>
				<option>12:20</option>
				</select>
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <select name="dep" class="dep">
	<option value="1st Year">1st Year</option>
	<option value="2nd Year">2nd Year</option>
	<option value="3rd Year">3rd Year</option>
	<option value="4th Year">4th Year</option>
	<option value="5th Year">5th Year</option>
	<option value="6th Year">6th Year</option>
	<option value="7th Year">7th Year</option>
	</select>
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <select name="c" class="c">
	<option value=" semester 1"> semester 1</option>
	<option value="semester 2"> semester 2</option></select>
              </div>
            </div> 
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text" id="text" name="b" class="form-control" maxlength="2"  placeholder="block" pattern="\d{2,10}" required x-moz-errormessage="Please Enter Block Number With 2 And Above Digit Integer Value   " title="Please Enter Number Only " >
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text" id="text" name="r" class="form-control" placeholder="room" pattern="\d{2,10}" required x-moz-errormessage="Please Enter Room Number With Two Digit Integer  Value  " title="Please Enter Number Only " >
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <select name="s" class="s">
	<option value="section 1">section 1</option>
	<option value="section 2">section 2</option>
	<option value="section 3">section 3</option>
	<option value="section 4">section 4</option>
	<option value="section 5">section 5</option>
	<option value="section 6">section 6</option>
	<option value="section 7">section 7</option>
	<option value="section 8">section 8</option>
	<option value="section 9">section 9</option>
	<option value="section 10">section 10</option>
	<option value="section 11">section 11</option>
	<option value="section 12">section 12</option>
	<option value="section 13">section 13</option>
	<option value="section 14">section 14</option>
	</select>
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text" id="text" name="d" class="form-control"  placeholder="date" >
              </div>
            </div> 
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
				<select name="day" class="day" width="15">
				<option value="monday">Monday</option>
				<option value="tuesday">Tuesday</option>
				<option value="wednesday">Wednesday</option>
				<option value="thursday">Thursday</option>
				<option value="friday">Friday</option>
				<option value="saturday">Saturday</option>
				<option value="sunday">Sunday</option></select>
				
				
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <select name="st" class="st" >
				<option value="class">Class</option>
				<option value="exam">Exam</option>
				<option value="lab">Lab</option></select>
              </div>
            </div> 
            <br>
            <div class="form-group last">
              <div class="col-sm-offset-1 col-sm-9">
                <button type="submit" id="submit" name="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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