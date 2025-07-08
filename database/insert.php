
<?php
$connection= mysql_connect("localhost", "root");
//check connection
     if(!$connection){

	 DIE('There is a problem with the system.  Please notify your system administrator.' );
	 }
//select database
mysql_select_db("sims",$connection);
//insert frm data from 'accountform' to "account" table in mysql
 $sql="INSERT INTO adminlogin (username,password)
 VALUES ('admin','admin')";
// if successfully insert data into database, displays message "Successful"
 if(!mysql_query($sql,$connection))
 {
 die ("Error in creating account:".mysql_error());
 }
 else{
 /*
 echo"Account created successfully.";
 echo "<br>";
 echo "<a href='create_account.html'>Back to main page</a>";
 */
 
 
 // display success message with table

                echo "Account created successfully.";
				 

 
 }
 /*
 $result=mysql_query($sql);
 if($result)
 {
echo "Account created successfully.";
echo "<br>";
echo "<a href='create_account.html'>Back to main page</a>";
}

else {
echo "ERROR";
}*/
//close connection 
  mysql_close($connection); 
?>
