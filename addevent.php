<!doctype html>
<html>
<head>
<link rel="stylesheet" type=" text/css"  href="but.css">
<!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add News</title>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
		<script>
	function ValidateAlpha(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert("	Only letters are allowed! ")
            return false;
			}}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
		 alert("Only number is allowed!")
            return false;

}
         
      }
	  


	 
			</script>

    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

<style type="text/css">
table.test {
    width           :  1000px;
    /*border-collapse : collapse;*/
    table-layout    : fixed;
	background:#FFF;
	
}

th.author {
    width    : 120px;
    border   : 1px solid red;
}

th.di {
    width    : 150px;
    border   : 1px solid red;
	
}

td.long {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid black;
}

th.id {
    overflow    : hidden;
    white-space : nowrap;
    width       : 30px;
    border      : 1px solid black;
}

th.title {
    overflow    : hidden;
    white-space : nowrap;
    width       : 100px;
    border      : 1px solid red;
}

th.heading {
    overflow    : hidden;
    white-space : nowrap;
    width       : 100px;
   border      : 1px solid red;
}

th.body {
    overflow    : hidden;
    white-space : nowrap;
    width       : 150px;
    border      : 1px solid red;
}

th.ed {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid red;
}

td.id {
    overflow    : hidden;
    white-space : nowrap;
    width       : 30px;
    border      : 1px solid red;
	background:#C63;
}

td.title {
    overflow    : HIDDEN;
    white-space : nowrap;
    width       : 100px;
    border      : 1px solid red;
	text-align:center;
}

td.heading {
    overflow    : HIDDEN;
    white-space : nowrap;
    width       : 200px;
    border      : 1px solid red;
	word-wrap: break-word;
	text-align:center;
}


td.body {
	overflow-y:scroll;
	overflow-x: scroll;
    overflow    : scroll;
    
	/*height:80px;*/ /*word-wrap: break-word;*/
	/*word-wrap: break-word;*/
	white-space : nowrap;
    width       : 800px;
    border      : 1px solid red;
	text-align:center;
	text-overflow: ellipsis;
	overflow: auto;
	position:relative;
	
	
}

td.author {
    overflow    : scroll;
    white-space : nowrap;
    width       : 100px;
    border      : 1px solid red;
	text-align:center;
}

td.di {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid red;
	text-align:center;
}

td.ed {
    overflow    : hidden;
    white-space : nowrap;
    width       : 50px;
    border      : 1px solid red;
	text-align:center;
	background:#3CF;
}

td.blank {
	width    : auto;
	border      : 1px solid red;
	height: auto;
	border-bottom-style: groove;
	padding: 10px;
}
.style3 {font-size: 10}
</style>
    
</head>
<br>
<script type="text/javascript">
function valid(f)
{
if(f.Pack_No.value=="")
{
alert("Enter Pack_No");
return false;
}
return true;
}
</script>
<body bgcolor="#5F9EA0">
<!--div class="container">
<div class="header">
  <p>-->

	   
<script src="js/validateaccount.js" language="javascript" type="text/javascript"></script>
<style type="text/css">
body{
    
	font-family:"Times New Roman", Times, serif;
	color:#000000;
	}
h2{
    text-align:center;
	font-size:36px;
	margin:0px;
   }
</style>

<h3><p align="center">ADD NEWS</p> </h2>
<hr>
<form action="addnews.php" method="post" name="form1" >

<table width="400" align="center" height="300">
	<tr>
		<td><b><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Text:</strong></b></td>
        <td><textarea rows="6" cols="40" name="body" onKeyPress="return ValidateAlpha(event)" required/></textarea></td>
		<!--<td><input type="text" name="body" /></td>-->
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="submit"> <input name="reset" type="reset" value="Reset"> </td>
	</tr>
</table>
</form> 		
</table> 
<?php
$con = mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("sims", $con );
if (isset($_POST["submit"]))
{
$body =$_POST["body"];




$query="INSERT INTO event (title)
		VALUES('$body') ";
		$rs=mysql_query($query);

if (!($rs))
{

echo "data Insertion failed".mysql_error();
             
}

else
{
 echo "<b><i><pre>                                                           news sccessfully posted!! </pre></i></b>";
 }
 }
 mysql_close($con);

?>	 
</div>
	<!-- end <br>of table  -->
	<br><br><br><br><br><br><br><br> <br><br><br><br><br><br> <br><br><br><br><br><br>
            <?php include("footer.php"); ?> 
        </div>
					
                    
</div>	
<!---------------------------------- end container -------------------------------->
</td>
</table>
</body>
</html>
 