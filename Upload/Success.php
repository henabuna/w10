<!DOCTYPE html>
<html>
<head>
<title>Docs | Success</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;"> Success</h1>
    <h2 style="color: green">You have successful Upload your file</h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
&copy;coders 2014
</div>
</div>
</body>
</html>
<?php
    $loc = "http://localhost/pro/View/View.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>