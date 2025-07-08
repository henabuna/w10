<html>
<head>
<link rel="stylesheet"type="text/css" href="but.css">
<script type="text/javascript" >

  function validate()
{
var data1=document.loginform.id.value;
var data2=document.loginform.instructor.value;
var data3=document.loginform.appeal.value;
 
    //validate user account type
   if( data1 == "-1" )
   {
     alert( "Please select your account type!" );
     document.loginform.select_account.focus() ;
     return false;
   }
   if( data2 == "" )
   {
     alert( "User's email is empity!" );
     document.loginform.user_name.focus() ;
     return false;
   }
   
   //validate user email
    
   //validate user password
    if( data3 == "" )
   {
     alert( "Empty password. Please enter your password" );
     document.loginform.pwd.focus() ;
     return false;
   }
        var umailval=document.loginform.user_name.value;
  var indexat=umailval.indexOf('@');
  var indexdot=umailval.indexOf('.');
  

if(indexat==0||indexdot==0||indexat==umailval.length-1||indexdot==umailval.length-1||indexdot-indexat<2)
{
alert("Invalid Email");
document.loginform.user_name.focus();
  return false
}
    
   //validate user password
    if( document.loginform.pwd.value == "" )
   {
     alert( "Empty password. Please enter your password" );
     document.loginform.pwd.focus() ;
     return false;
   }
   var minlength=4;
  if (document.loginform.pwd.value.length < minlength) 
{
alert("Your password must be at least " + minlength + " characters long. Please create strong password.");
document.loginform.pwd.focus();
  return false;

}
var invalid = " "; // Invalid character is a space

// check for spaces

if (document.loginform.pwd.value.indexOf(invalid) > -1  ) 
{
alert("Sorry, spaces are not allowed in passwords.");
document.loginform.pwd.focus();
return false;
}

}


</script>
</head>
<center>
<body bgcolor="#CCCCCC">

<div>
<img src="header.jpg" width="900" height="150" ></div>
<div id="navigation">

<CENTER>
<ul>
             
			<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="index.php" class="level1"><span>Home</span></a></li>
			<li class="level1 item245 parent"><a href="post/stdindex.php" class="level1 parent"><span>Information</span></a></li>
			<li class="level1 item245 parent"><a href="appeal.php" class="level1 parent"><span>Appeal For Grade</span></a></li>
			<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="#" class="level1"><span>View</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item197"><a href="searchschedule.php" class="level2"><span>Schedules</span></a></li>
			<li class="level2 item198"><a href="search.php" class="level2"><span>Grade</span></a></li>
			</li><li class="level1 item196 parent active current"><a href="View/stdview.php" class="level1 parent active current"><span>Files</span></a>
			</ul></div></div></div></div></li>
			
			 	
</ul>
</CENTER></div>
<?php
$con = mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("sims", $con );
if (isset($_POST["submit"]))
{
$id =$_POST["id"];
$cr=$_POST["cr"];
$dp =$_POST["dp"];
$instructor =$_POST["instructor"];
$appeal =$_POST["appeal"];

$sql="INSERT INTO accept (id,course,department,instructor,appeal)
 VALUES ('$_POST[id]','$_POST[cr]','$_POST[dp]','$_POST[instructor]','$_POST[appeal]')";
 $rs=mysql_query($sql);

if (!($rs))
{

echo "insertion failed";
             
}

else
{
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
          <h1 style = "margin-left:50px;">Submit <small>Appeal</small></h1>
        </div>
        <div class="panel-body">
          <form name="frm" method="post" action="appeal.php"  onSubmit="return register()" class="form-horizontal" role="form">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text"  name="id" class="form-control" placeholder="student id" required autofocus>
              </div>
            </div>
			<br>
			<div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text"  name="cr" class="form-control" placeholder="course" required autofocus>
              </div>
            </div>
			<br>
			<div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <select name="dp" class="dp" placeholder="department">
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
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text" id="text" name="instructor" class="form-control" placeholder="instructor name" required>
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text" id="text" name="appeal" class="form-control" value="my grade is not correct" required>
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
</body></center>
</html>