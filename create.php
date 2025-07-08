
<head>
<script>
function preventBack(){window.history.forward();}
setTimeout("preventBack()",0);
window.onunload=function(){null};
</script></head><head>
<link rel="stylesheet"type="text/css" href="but.css">
<script type="text/javascript" >

  function validate()
{
var data1=document.loginform.UserName.value;
var data2=document.loginform.pwd.value;
var data3=document.loginform.pass.value;
 
    //validate user account type
   if( data1 == "" )
   {
     alert( "Please enter UserName!" );
     document.loginform.UserName.focus() ;
     return false;
   }   
   
     if( data2 == "" )
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
if(data2 != data3){
alert("Sorry, passwords doesnt match.");
document.loginform.pass.focus();
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
			<ul class="menu menu-dropdown"><ul class="menu menu-dropdown"><li class="level1 item196 parent active current"><a href="#" class="level1 parent active current"><span>Manage Account</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item246 parent"><a href="create.php" class="level2 parent"><span>Create</span></a><ul class="level3"><li class="level3 item247"><a href="update.php" class="level3"><span>Update</span></a><ul class="level3"><li class="level3 item247"><a href="deleteAccount.php" class="level3"><span>Delete</span></a></li></ul></li></ul></li>		 	
</ul><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"></div></div></div></div></li>			 	
</ul>
<li class="level1 item383"><a href="post/index.php" class="level1"><span>Information</span></a></li>
<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="updateadmin.php" class="level1"><span>update admin account</span></a></li>
<li class="level1 item383"><a href="adminlogin.html" class="level1"><span>LogOut</span></a></li>

</CENTER>
</div>
<?php
$con = mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("sims", $con );
if (isset($_POST["submit"]))
{
$UserName =$_POST["UserName"];
$dep =$_POST["dep"];
$deg =$_POST["deg"];
$age =$_POST["age"];
$pwd =$_POST["pwd"];
$pass =$_POST["pass"];





$query="INSERT INTO depheadlogin (UserName,department,degree,age,Password,ConfirmPassword)
 VALUES ('$_POST[UserName]','$_POST[dep]','$_POST[deg]','$_POST[age]','$_POST[pwd]','$_POST[pass]')";
		$rs=mysql_query($query);

if (!($rs))
{

echo "data Insertion failed".mysql_error();
             
}

else
{
 echo '<b><i style="color:green;"><pre>Account created successfully!! </pre></i></b>';
 }
 }
 mysql_close($con);

?>	

			 
<center>
<div id="content"  >
<div class="container" >
  <div class="row">
      <div class="panel panel-default">
        <div class="page-header">
          <h1 style = "margin-left:50px;">Create <small>Account For Department Head </small></h1>
        </div>
        <div class="panel-body">
          <form name="loginform" method="post" action="create.php"  onSubmit="return validate()" class="form-horizontal" role="form">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text"  name="UserName" class="form-control" placeholder="Username" >
              </div>
            </div>
            <br>
			<div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text"  name="dep" class="form-control" placeholder="department" >
              </div>
            </div>
			<br>
			<div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text"  name="deg" class="form-control" placeholder="degree" >
              </div>
            </div>
			<br>
			<div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text"  name="age" class="form-control" placeholder="age" >
              </div>
            </div>
			<br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="password" id="password" name="pwd" class="form-control" placeholder="password">
              </div>
            </div>
            <br>
			<div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="password" id="password" name="pass" class="form-control" placeholder="confirm_password" >
              </div>
            </div>
            <div class="form-group last">
              <div class="col-sm-offset-1 col-sm-9">
                <button type="submit" id="submit" name="submit" class="btn btn-success">create</button>
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