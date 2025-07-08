
<style type="text/css">
#navigation ul {
    font-family: Arial, Verdana;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
	size:landscape;
}
#navigation ul li {
    display: block;
    position: relative;
    float: left;
}
#navigation li ul {
    display: none;
	margin-left:0px;
     color: #292929;
	 size:landscape;
}
#navigation ul li a {
    display: block;
    text-decoration:bold ;
    color: white;
    border-top: 1px solid black;
    padding: 5px 15px 12px 15px;
    margin-left: 1px;
    white-space: nowrap;
	size:landscape;
}
#navigation ul li a:hover {
color: #576682;
background:#fff;
size:landscape;
}
#navigation li:hover ul {
    display: block;
    position: absolute;
	color:#4897EE;
	size:landscape;
}
#navigation li:hover a { 
color: #000000;
font-weight:bold;
background: #fff;
text-decoration: none;
size:landscape; }
#navigation li:hover li a:hover {
    background:#4897EE;
}
#navigation{
height:5%;
width:900px;
background-color:purple;
}
</style>
<body bgcolor="#CCCCCC">
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
<link type="text/css" rel="stylesheet" href="jquery/jRating.jquery.css">
<script type="text/javascript" src="jquery/jquery.js"></script>
<script type="text/javascript" src="jquery/jRating.jquery.js"></script>


<title></title>
</head>
<body>
<center>
<div>
<img src="../header.jpg" width="900" height="150" ></div></center>
<center>
<div id="navigation">

<CENTER>
<ul>
             
			<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="../index.php" class="level1"><span>Home</span></a></li>
			<li class="level1 item245 parent"><a href="stdindex.php" class="level1 parent"><span>Information</span></a></li>
			<li class="level1 item245 parent"><a href="../appeal.php" class="level1 parent"><span>Appeal For Grade</span></a></li>
			<nav id="menu"><ul class="menu menu-dropdown"><li class="level1 item383"><a href="#" class="level1"><span>View</span></a><div class="dropdown columns1"><div class="dropdown-bg"><div><div class="width100 column"><ul class="level2"><li class="level2 item197"><a href="../searchschedule.php" class="level2"><span>Schedules</span></a></li>
			<li class="level2 item198"><a href="../search.php" class="level2"><span>Grade</span></a></li>
			</li><li class="level1 item196 parent active current"><a href="../View/stdview.php" class="level1 parent active current"><span>Files</span></a>
			</ul></div></div></div></div></li>
			
			 	
</ul>
</CENTER></div></center>

	<div id="container">
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
