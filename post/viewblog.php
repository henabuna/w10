<?php
$con = mysqli_connect("localhost","root","","sims");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
		  
		  
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	if(empty($id)){
		header("location: index.php");
	}
	mysqli_query($con, "UPDATE content SET views = views + 1 WHERE id = '$id'");
	
	//update views/day
	$v_query = mysqli_query($con, "SELECT * FROM views_per_day WHERE post_id = '$id'");
	$num_rows = mysqli_num_rows($v_query);
	$date = date("Y-m-d");
	if($num_rows == 0){
		mysqli_query($con, "INSERT INTO views_per_day (post_id, date, views) VALUES ('$id', '$date', '1')");
	}elseif($num_rows >= 1){
		while($v_row = mysqli_fetch_array($v_query)){
			$v_id = $v_row['id'];
			$v_date = $v_row['date'];
			if($v_date != $date){
				mysqli_query($con, "UPDATE views_per_day SET date = '$date', views = '1' WHERE id = '$v_id'");
			}else{
				mysqli_query($con, "UPDATE views_per_day SET views = views + 1 WHERE id = '$v_id'");
			}
		}
	}
	

?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="jquery/jRating.jquery.css">
<title></title>
</head>
<body>
<center>
<div>
<img src="../header.jpg" width="900" height="150" ></div></center>

	<div id="container">
    	<div class="header">
        	<a href="index.php"><h1>Back</h1></a>
            <a href="blog.php"><h1>Blog</h1></a>
        </div>
        <div class="content">
        	<div class="wrapper">
        	<?php
				$query = mysqli_query($con, "SELECT * FROM content WHERE id = '$id'");
				while($row = mysqli_fetch_array($query)){
			?>
           	<h2><?php echo $row['subject']; ?></h2>
            <h4><?php echo $row['date']; ?></h4>
            <h4>Visitors have accessed this post <?php echo $row['views']; ?> times.</h4></br></br>
            <?php echo $row['body']; ?>
            <div class="rating" data-average="<?php echo $row['rate']; ?>" data-id="<?php echo $id; ?>"></div>
            <?php } ?>
            </div>
           
        </div>
                 <!--Popular Post-->
       
    </div>
</body>
</html>