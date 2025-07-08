<?php
    
    $db = mysql_connect("localhost", "root", "");
	
if(mysql_select_db("sims",$db)){
 echo " connection created successfully."."<br>";}
 else{
  die ("Connect Failed !! : ".mysql_error());}
    ?>
