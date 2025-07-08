<?php
ob_start();

// Connect to server and select databse.
$connection = mysql_connect("localhost","root","");
 if (!$connection)
   {
   die('Could not connect: ' . mysql_error());
   }
 
mysql_select_db("sims",$connection);

// Define $myusername and $mypassword
$accType=$_POST['select_account'];
$myusername=$_POST['user_name'];
$mypassword=$_POST['pwd'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
//feth user username and password from database
$sql=" SELECT UserName,Password
   FROM adminlogin WHERE UserName='$txtname' and password='$pwd' ";
   $sql1=" SELECT ID
   FROM studentlogin WHERE ID='$id'  ";
   $sql2=" SELECT UserName,Password
   FROM instructorlogin WHERE UserName='$txtname' and password='$pwd' ";
   $sql3=" SELECT UserName,Password
   FROM depheadlogin WHERE UserName='$txtname' and password='$pwd' ";
   
$result=mysql_query($sql) or die(mysql_error());
$result1=mysql_query($sql1) or die(mysql_error());
$result2=mysql_query($sql2) or die(mysql_error());
$result3=mysql_query($sql3) or die(mysql_error());

while($row=mysql_fetch_array($result))
   {
   //if(($_POST['select_account'] == $row['AccountType']) && ($_POST['user_name'] == $row['Email']) && ($_POST['pwd'] == $row['Password']) && ($_POST['login'])) 
    
if(($UserName == $row['UserName']) &&  ($mypassword == $row['Password']) && ($_POST['login']))	
		  {
	       if($row['UserName'] == 'admin')  //  doctor 
			  {
			   header('location:adminpage.html');
			  //exit();
              }
			  
			  while($row=mysql_fetch_array($result1))
   {
   //if(($_POST['select_account'] == $row['AccountType']) && ($_POST['user_name'] == $row['Email']) && ($_POST['pwd'] == $row['Password']) && ($_POST['login'])) 
    
if( ($mypassword == $row['Password']) && ($_POST['login']))	
		  {
	      // if($row['Password'] == 'admin')  //  doctor 
			  //{
			   header('location:studentpage.html');
			  //exit();
              }}
			 
			 while($row=mysql_fetch_array($result2))
   {
   //if(($_POST['select_account'] == $row['AccountType']) && ($_POST['user_name'] == $row['Email']) && ($_POST['pwd'] == $row['Password']) && ($_POST['login'])) 
    
if(($UserName == $row['UserName']) &&  ($mypassword == $row['Password']) && ($_POST['login']))	
		  {
	       if($row['UserName'] == 'Instructor')  //  doctor 
			  {
			   header('location:instructorpage.html');
			  //exit();
              }
			  
			  while($row=mysql_fetch_array($result))
   {
   //if(($_POST['select_account'] == $row['AccountType']) && ($_POST['user_name'] == $row['Email']) && ($_POST['pwd'] == $row['Password']) && ($_POST['login'])) 
    
if(($UserName == $row['UserName']) &&  ($mypassword == $row['Password']) && ($_POST['login']))	
		  {
	       if($row['UserName'] == 'Department Head')  //  doctor 
			  {
			   header('location:depheadpage.html');
			  //exit();
              }
			/* elseif($row['Student'] == 'lecture')   //  clerk
				       {
					    header('location:lecture.html');
						//exit();
						}
			
						elseif($row['AccountType'] == 'registrar_officer')  //  patient
					    {
					    header('location:regoff.html');
						//exit();
						}
						
					
						elseif($row['AccountType'] == 'record_worker')   //  pharmacist
				         {
					      header('location:recordworker.html');
					     // exit();
						 }	
 
                      elseif($row['AccountType'] == 'department_head')   //lab techician
                          {
                            header('location:dephead.html'); 
                          }
                     //elseif($AccountType == 'administrator')*/
					 
 
                  else 
					    {
						 echo'error: in login check your username and password';
					     header('location: home.html');
					    }
	   
	   
	   }// end of if checking account type, username and password
	
	} //end of while loop
 ob_end_flush(); 
  
  ?>