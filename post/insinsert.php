<?php
	$con = mysqli_connect("localhost","root","","sims");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
	$subject = $_POST['subject'];
	$body = $_POST['body'];
	
	echo $subject, $body;
	if(empty($subject)){
		$message = "Subject is Required!";
		header("location: insblog.php?message=".$message);
	}else if(empty($body)){
		$message = "Body is required!";
		header("location: insblog.php?message=".$message);
	}else{
		mysqli_query($con,"INSERT INTO content (subject, body, hits, rate)
		VALUES ('$subject', '$body', 0, 0)");
		$message = "Successfully Saved!";
		header("location: insblog.php?message=".$message);
	}
?>