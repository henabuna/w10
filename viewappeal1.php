
<!doctype html>
<html><br>
<head>
<link rel="stylesheet" type=" text/css"  href="css/nav.css">
<!--<link href="../FrontEnd/css/admin_panel_home.css" rel="stylesheet" type="text/css" /-->
<link href="css/admin_panel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View request</title>

<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<!--<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>-->
	<!--<script type="text/javascript" src="js/jquery.equalHeight.js"></script>-->
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

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

/*p.test
{
word-wrap:break-word;
}*/ 

.style1 {
	font-size: 12px;
	font-weight: bold;
}
</style>
</head>

<body bgcolor="#5F9EA0">
<!--div class="container">
<div class="header">
  <p>-->
  <div id="navigation">

<CENTER>
<ul>
             
			<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="index.php" class="level1"><span>Home</span></a></li>
			<li class="level1 item245 parent"><a href="post/regindex.php" class="level1 parent"><span>Information</span></a></li>
			<li class="level1 item245 parent"><a href="viewappeal1.php" class="level1 parent"><span>Approve Appeal</span></a></li>
			<li class="level2 item198"><a href="view_info.php" class="level2"><span>Approve Grade</span></a></li>
			</li>
			<li class="level1 item245 parent"><a href="reglogin.php" class="level1 parent"><span>LogOut</span></a></li>
			
			 	
</ul>
</CENTER></div> 

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
		<h1><p align="center">View Request</p> </h2>   
		<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<table align='center' border="1" style="border-radius:15px" width="400px">
<tr>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'><h3>id</h2></th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'><h3>department</h2></th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'><h3>instructor</h2></th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'><h3>appeal</h2></th>
<th style='height:50px;	color:#000;	font-weight:bold;background-color:#000;'><font color='white' size='2'>Action</th>
</tr>  
	<?php
$result = mysql_query("SELECT * FROM appeal");
while($row = mysql_fetch_array($result))
  {
$id=$row['id'];
$department=$row['department'];
$instructor=$row['instructor'];
$appeal=$row['appeal'];




?>
<tr>
<td><?php echo $id;?></td>
<td><?php echo $department;?></td>
<td><?php echo $instructor;?></td>
<td><?php echo $appeal;?></td>




						<?php
print("<td style='height:30px;' align = 'center' width = '1'><a href = 'approve.php?key=".$id."'><img width='35px' height='25px' src = 'images-1-1.jpeg' title='approve' onclick='isdelete();'></img></a></td>
		");?>


		</tr>
<?php
  }
print( "</table>");

?>




</td>
</tr>
<tr>
</table>
</div>
	<!-- end <br>of table  -->
	<br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
					
                    
</div>	
<!---------------------------------- end container -------------------------------->
</td>
</table>
</body>
</html>