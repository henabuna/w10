
<?php
$connection= mysql_connect("localhost", "root");
//check connection
     if(!$connection){

	 DIE('There is a problem with the system.  Please notify your system administrator.' );
	 }
//select database
mysql_select_db("sims",$connection);
//insert frm data from 'accountform' to "account" table in mysql
 $sql="INSERT INTO student (ID,FirstName,LastName,year,department,course,result)
 VALUES ('$_POST[id]','$_POST[fn]','$_POST[ln]','$_POST[y]','$_POST[dep]','$_POST[c]','$_POST[r]')";
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
echo "<html>";

echo "<head>";

echo '<style type="text/css">';


echo "A:hover {color:blue; font-weight:bold;}"; /* style for active links – bold and red */


echo "</style>";

echo "</head>";
echo '<body background="capture.png" width="10%">';

echo '<table align="center" width="40%" heigth="800" border="0" >';

              echo "<tr>";
              echo '</tr>';
        echo '<tr bgcolor="lightblue" height="" >';
                echo '<th colspan="3" valign="top">';
				 echo "<br>";
				  echo "<br>";
                echo "Account created successfully.";
				 echo "<br>";
				 echo "<br>";
                echo '</th>';
        echo '</tr>';

echo '<tr bgcolor="#E4EBEB" >';
 echo '<th colspan="3" valign="top">';
  echo "<br>";
   echo "<br>";
echo "<a href='index.php'> <STRONG>GO TO HOME PAGE</STRONG></a>";
 echo "<br>";
 echo "<br>";
 echo '</th>';
 
 echo '</tr>';
 
echo '</table>';
echo '</body>';

echo '</html>';
 
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
