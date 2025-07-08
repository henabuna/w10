<html>
<head>
<link rel="stylesheet"type="text/css" href="but.css">
<script type="text/javascript" >

  function validate()
{
var data1=document.loginform.select_account.value;
var data2=document.loginform..user_name.value;
var data3=document.loginform.pwd.value;
 
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
<div id="content"><center>
<form action="grade.php" name="search" method="get" onSubmit="return validate();">
<input type="text"  name="value" placeholder="course name" />
<input type="submit" name="search" value="search now" /> 
</form>
 <?php
mysql_connect("localhost","root","");
mysql_select_db("sims");
if(isset($_GET['search']))
{
$search_value=$_GET['value'];
$query="SELECT*FROM student WHERE Course LIKE'%$search_value%'";
$run=mysql_query($query);
echo "<TABLE border='1' bgcolor 'whiteblue'>";
echo"<TR><TD><B>id</B><td><b>course</b><td><B>grade</B></TR>";
while($row=mysql_fetch_array($run))
{
$id=$row['ID'];
$amount=$row['Course'];
$type=$row['Result'];
echo "<TR><TD>";
echo $row["ID"];
echo "<TD>";
echo $row["Course"];
echo "<TD>";
echo $row["Result"];

}
echo "</TABLE>";
}
?>
</center></div>
	

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