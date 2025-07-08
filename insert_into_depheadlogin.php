
<?php
$connection= mysql_connect("localhost", "root");
//check connection
     if(!$connection){

	 DIE('There is a problem with the system.  Please notify your system administrator.' );
	 }

mysql_select_db("sims",$connection);

 $sql="INSERT INTO depheadlogin (UserName,Password,ConfirmPassword)
 VALUES ('$_POST[UserName]','$_POST[pwd]','$_POST[pass]')";

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


echo "A:hover {color:red; font-weight:bold;}"; /* style for active links – bold and red */


echo "</style>";

echo "</head>";


echo '<table align="center" width="40%" heigth="800" border="0" >';

              echo "<tr>";
              echo '</tr>';
        echo '<tr bgcolor="#9999CC" height="" >';
                echo '<th colspan="3" valign="top">';
				 echo "<br>";
				  echo "<br>";
                echo "data inserted successfully.";
				 echo "<br>";
				 echo "<br>";
                echo '</th>';
        echo '</tr>';

echo '<tr bgcolor="#0099FF" >';
 echo '<th colspan="3" valign="top">';
  echo "<br>";
   echo "<br>";
echo "<a href='instructorpage.html'> <STRONG>GO BACK TO PAGE</STRONG></a>";
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
