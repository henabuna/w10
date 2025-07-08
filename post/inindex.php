<head>
<script>
function preventBack(){window.history.forward();}
setTimeout("preventBack()",0);
window.onunload=function(){null};
</script></head>
<?php
$con=mysqli_connect("localhost","root","","sims");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
?>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="../but.css">
<link type="text/css" rel="stylesheet" href="jquery/jRating.jquery.css">
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/jRating.jquery.js"></script>


<title></title>
</head>
<body bgcolor="#CCCCCC">
<center>
<div>
<img src="../header.jpg" width="900" height="150" ></div></center>
<center>

<div id="navigation">

<CENTER><ul>
             
			
			 						 			 
			  <nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="../index.php" class="level1"><span>Home</span></a></li>
			  <li class="level1 item383"><a href="#" class="level1"><span>Manage accounts</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item197"><a href="../deleteown.php" class="level2 parent"><span>Delete</span></a></li><li class="level2 item246 parent"><a href="../updateown.php" class="level2 parent"><span>Update</span></a></li></ul>
			  <li class="level1 item245 parent"><a href="inindex.php" class="level1 parent"><span>Information</span></a></li>
			  <li class="level1 item383"><a href="#" class="level1"><span>View</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item198"><a href="../instructorpage.php" class="level2"><span>schedule</span></a></li>
			  <li class="level2 item198"><a href="../viewappeal.php" class="level2"><span>Appeal</span></a></li>
			  </li><li class="level1 item196 parent active current"><a href="../grade.php" class="level1 parent active current"><span>Grade</span></a>
			</ul></div></div></div></div></li>
			<li class="level1 item383"><a href="#" class="level1"><span>Upload</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item198"><a href="../Upload/Upload.php" class="level2"><span>File</span></a></li>
			  </li><li class="level1 item196 parent active current"><a href="../Upload/Uploadreg.php" class="level1 parent active current"><span>Grade</span></a>
			</ul></div></div></div></div></li>
 			  <nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="../up.php" class="level1"><span>updategrade</span></a></li>
			  <li class="level1 item383"><a href="../instructorlogin.php" class="level1"><span>Logout</span></a></li>
			  
			 	
</ul>
</CENTER></div></center>

	<div id="container">
	<div id="container"> <a href="insblog.php">
  <h2>Blog</h2>
</a> </div>
        <div class="content">
        	<?php
				$per_page = 5;
				$count_rows = mysqli_query($con, "SELECT * FROM content");
				$num_rows = mysqli_num_rows($count_rows);
				$pages = ceil($num_rows / $per_page);
				$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
				$start = ($page - 1) * $per_page;
				
				$query = mysqli_query($con, "SELECT * FROM content ORDER BY id DESC LIMIT $start, $per_page");
				while($row = mysqli_fetch_array($query)){
			?>
            <div class="wrapper">
           	<h2><?php echo $row['subject']; ?></a></h2>
            <h4><?php echo $row['date']; ?></h4>
            
            <!-- Display star rating-->
            <div class="rating" data-average="<?php echo $row['rate']; ?>" data-id="<?php echo $row['id']; ?>"></div>
            <?php
			$body = $row['body'];
			if(strlen($body)>100){
				preg_match('/^([^.!?\s]*[\.!?\s]+){0,30}/', strip_tags($body), $abstract);
				echo "<h3>".$abstract[0]."</h3>";
			}else{
				echo "<h3>".$body."</h3>";
			}
			?>
            </div>
            <?php 
				} 
				
				if($pages >= 1){
					for($i = 1; $i <= $pages; $i++){
						echo "<a href='?page=".$i."'><h6>".$i. "</h6></a>";
					}
				}
			?>
            
        </div>
        
         <!--Popular Post-->
        
    </div>
</body>
</html>
