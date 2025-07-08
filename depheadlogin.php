<html>
<head>
<link rel="stylesheet"type="text/css" href="but.css">
<script type="text/javascript" >
</script>
</head>
<center>
<body bgcolor="#CCCCCC">

<div>
<img src="header.jpg" width="900" height="150" ></div>
<div id="navigation">

<CENTER><ul>
             
			<li> <a href ="index.php">Home</a>
			  </li>
			 						 			 
			  
			 	
</ul>
</CENTER></div>
	<?php

$t=0;
session_start();
$connection = mysql_connect("localhost","root","");
 if (!$connection)
   {
   die('Could not connect: ' . mysql_error());
   }
mysql_select_db("sims", $connection);
$sql='SELECT UserName,password
   FROM depheadlogin';
$result=mysql_query($sql,$connection) or die(mysql_error($connection));

while($row=mysql_fetch_array($result)){

if(($name== $_POST['name']) && ($id==$_POST['id'])){
$_SESSION['user']=$_POST['name'];
$_SESSION['logged']=1;
$t=1;
if ($_POST['name']==$row[0]){
header('location:depheadpage.html');

}
}
}
if($t==0){
echo"Incorrect userame and password."; 
echo"Please write correct username and password.";  
//header('location:invalid.html');
}
?>





<div id="content"  >
<div class="container" >
  <div class="row">
      <div class="panel panel-default">
        <div class="page-header">
          <h1 style = "margin-left:50px;">Department Head <small>Login</small></h1>
        </div>
        <div class="panel-body">
          <form method="post" action="depheadlogin.php"  onSubmit="return validate()" class="form-horizontal" role="form">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text" id="username" name="name" class="form-control" placeholder="Username" required autofocus>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="password" id="password" name="id" class="form-control" placeholder="password" required>
              </div>
            </div>
            <br>
            <div class="form-group last">
              <div class="col-sm-offset-1 col-sm-9">
                <button type="submit" id="submit" name="submit" class="btn btn-success">Sign in</button>
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