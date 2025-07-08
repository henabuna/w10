
<?php
$connection= mysql_connect("localhost", "root");
//check connection
     if(!$connection){

	 DIE('There is a problem with the system.  Please notify your system administrator.' );
	 }
//select database
mysql_select_db("sims",$connection);
//insert frm data from 'accountform' to "account" table in mysql
 $sql="INSERT INTO `content` (`id`, `subject`, `body`, `date`, `views`, `rate`, `total_rate`, `hits`)
  VALUES(2, 'PHP', '<p>PHP received mixed reviews due to lacking native support at the core language level. In 2005, a project headed by Andrei Zmievski was initiated to bring native Unicode support throughout PHP, by embedding the (ICU) library, and representing text strings as  internally.\r\n Since this would cause major changes both to the internals of the \r\nlanguage and to user code, it was planned to release this as version 6.0\r\n of the language, along with other major features then in development.</p>\r\n<p>However, a shortage of developers who understood the necessary \r\nchanges, and performance problems arising from conversion to and from \r\nUTF-16, which is rarely used in a web context, led to delays in the \r\nproject.\r\n As a result, a PHP&nbsp;5.3 release was created in 2009, with many \r\nnon-Unicode features back-ported from PHP&nbsp;6, notably namespaces. In \r\nMarch 2010, the project in its current form was officially abandoned, \r\nand a PHP&nbsp;5.4 release was prepared containing most remaining non-Unicode\r\n features from PHP&nbsp;6, such as traits and closure re-binding. Initial hopes were that a new plan would be formed for Unicode integration, but as of 2014 none has been adopted.</p>', '2014-08-06 13:38:30', 146, 2.78873, 198, 71)";
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
  mysql_close($connection); 
?>