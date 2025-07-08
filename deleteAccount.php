<html>
<head>
<link rel="stylesheet"type="text/css" href="but.css">
</head>
<center>
<body bgcolor="#CCCCCC">
<div><img src="header.jpg" width="900" height="150" ></div>
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
</div>
<div id="content" height="400" >
<div class="container" >
  <div class="row">
      <div class="panel panel-default">
        <div class="page-header">
          <h1 style = "margin-left:50px;">Delete <small>Account</small></h1>
        </div>
        <div class="panel-body">
          <form name="deleteform" method="post" action="deleteAccount.php"  onSubmit="return validate()" class="form-horizontal" role="form">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="text" id="name" name="name" class="validate[required]" placeholder="enter Username" required autofocus>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-1 control-label"></label>
              <div class="col-sm-10">
                <input type="password" id="password" name="Password" class="form-control" placeholder="  password" required>
              </div>
            </div>
			<br>
            <div class="form-group last">
              <div class="col-sm-offset-1 col-sm-9">
                <button type="submit" id="submit" name="submit" class="btn btn-success">Delete</button>
              </div>
            </div>
  <?php
	if(isset($_POST["submit"]))
		{
			$connection = mysql_connect("localhost","root","");
			if (!$connection)
				{
					die('Could not connect: ' . mysql_error());
				}
 
				mysql_select_db("sims", $connection);
				
				
				
				$q='SELECT UserName FROM depheadlogin WHERE UserName = "'.$_POST["name"].'" && Password="'.$_POST["Password"].'"';
				$result=mysql_query($q,$connection) or die(mysql_error($connection));
				$row=mysql_fetch_array($result);
				if($row[0]=="")
				{ 
				echo '<table align="center">';
						 echo '<tr>';
						 echo '<td>';
				echo '<font color="red"><b>'.'Sorry,the entered account name' . "   ".'<h2>' .$_POST['name']."   ".'</h2>'.' is not found in database.'.'<br><br>Please enter the correct account name.'.'<b><br></font>';
				echo '<tr>';
				echo '</table>';	
						die();	
				
				}
				elseif($row[0]==$_POST["name"])
				{
				$q='DELETE FROM depheadlogin WHERE UserName = "'.$_POST["name"].'" && Password="'.$_POST["Password"].'"';
				$result1=mysql_query($q,$connection) or die(mysql_error($connection));
						echo '<table align="center">';
						 echo '<tr>';
						 echo '<td>';
					echo '<font color="red"><b>' . 'you have deleted the account for ' . "   ".'<h2>' .$_POST['name'].'<h2>'.' successfully '.'<b><br></font>'; 
					echo '</table>';	
						die();	
				}else{
				echo '<table align="center">';
				 echo '<tr>';
				 echo '<td>';
				echo '<font color="red"><b>' . 'The account for ' . "   " .$_POST['name'].' is not removed'.'<b><br></font>'; 
				
				echo '</table>';	
				die();				
				}			
				
						
		}
				
		
?>
  
  
 </form>
        </div>
      </div>
    </div>
  </div>
</div>
			  
			   
       
  </div></div>
  
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
    <div id="footerPancss"><a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">css</a></div>  </div>
</div>
</body>
</center>
</html>