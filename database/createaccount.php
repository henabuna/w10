<html>
<?php
$connection= mysql_connect("localhost","root","");
     if(!$connection){

	 DIE('There is a problem with the system.  Please notify your system administrator.' );
	 }
	 
	 //Create database
$sql='CREATE DATABASE sims';
if(mysql_query($sql,$connection))
  {
 
 
                 echo 'CONGRATULATIONS!!!'."<br>";
				 echo ' Database created successfully.'."<br>";
				 
 
  }
else
  {
  echo 'Error creating database: ' ;
  }
 
 //create    account table 
 mysql_select_db("sims",$connection);
 
 
 $sql="CREATE TABLE adminlogin
 (
  UserName varchar(15) NOT NULL,
  Password varchar(15) NOT NULL,
 ConfirmPassword varchar(15) NOT NULL,
 UNIQUE KEY('UserName'))";
 
  if(mysql_query($sql,$connection))
 {
 
  

      echo " table created successfully."."<br>";
				
 }
 else
 {
 echo"Error creating table:".mysql_error($connection);
 }

 
 $sql2="CREATE TABLE instructorlogin
 (
  UserName varchar(15) primary key NOT NULL,
  department varchar(15) not null,
  degree varchar(15) not null,
  age int not null,
  Password varchar(15) NOT NULL,
 ConfirmPassword varchar(15) NOT NULL)";
  if(mysql_query($sql2,$connection))
 {
 
  

      echo " table created successfully."."<br>";
				
 }
 else
 {
 echo"Error creating table:".mysql_error($connection);
 }
 
 $sql3="CREATE TABLE depheadlogin
 (
  UserName varchar(15) primary key NOT NULL,
  department varchar(15) not null,
  degree varchar(15) not null,
  age int not null,
  Password varchar(15) NOT NULL,
 ConfirmPassword varchar(15) NOT NULL)";
 
 //Excute query
 if(mysql_query($sql3,$connection))
 {
 
  

      echo " table created successfully."."<br>";
				
 }
 else
 {
 echo"Error creating table:".mysql_error($connection);
 }
 $sql4="CREATE TABLE appeal
 (
  id varchar(20) NOT NULL,
  department varchar(20) not null,
  instructor varchar(20) NOT NULL,
  appeal varchar(20) NOT NULL)";
  
   if(mysql_query($sql4,$connection))
 {
 
  

      echo " table created successfully."."<br>";
				
 }
 else
 {
 echo"Error creating table:".mysql_error($connection);
 }
 $sql5="CREATE TABLE student
 (
   ID varchar(15) not null,
   Department varchar(15) NOT NULL,
   section varchar(20) not null,
   Course varchar(15) NOT NULL,
   year varchar(20) not null,
   Result varchar(15) not null)";
 
 //Excute query
 if(mysql_query($sql5,$connection))
 {
 
  

      echo " table Student created successfully."."<br>";
				
 }
 else
 {
 echo"Error creating table:".mysql_error($connection);
 }
 
 $sql6="CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NOT NULL,
  `views` int(10) NOT NULL DEFAULT '0',
  `rate` float NOT NULL,
  `total_rate` float NOT NULL,
  `hits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16" ;
if(mysql_query($sql6,$connection))
 {
 
  

      echo " table created successfully."."<br>";
				
 }
 else
 {
 echo"Error creating table:".mysql_error($connection);
 }
 
  $sql8="CREATE TABLE schedule
 (
   department varchar(15) not null,
   course varchar(15) not null,
   instructor varchar(15) NOT NULL, 
   starttime varchar(15) NOT NULL,
   endtime varchar(15) NOT NULL,
   year varchar(15) NOT NULL,
   semester varchar(15) NOT NULL,
   block varchar(15) NOT NULL,
   room varchar(15) NOT NULL,
   section varchar(15) NOT NULL,
   date varchar(15) NOT NULL,
   day varchar(15) not null,
   type varchar(15) NOT NULL)";
 
 //Excute query
 if(mysql_query($sql8,$connection))
 {
 
  

      echo " table schedule created successfully."."<br>";
				
 }
 else
 {
 echo"Error creating table:".mysql_error($connection);
 }
 $sql9="CREATE TABLE upload
 (
  id int AUTO_INCREMENT NOT NULL,
  name varchar(100) NOT NULL,
  type varchar(100) NOT NULL,
  size int NOT NULL,
  content longblob NOT NULL, 
  PRIMARY KEY (id))";
  
   if(mysql_query($sql9,$connection))
 {
 
  

      echo " table created successfully."."<br>";
				
 }
 
?>
	</html>
 