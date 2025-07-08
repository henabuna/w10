<?php
    
    if(isset($_POST['upload'])&&$_FILES['userfile']['size']>0)
    {
        $fileName = $_FILES['userfile']['name'];
        $tmpName  = $_FILES['userfile']['tmp_name'];
        $fileSize = $_FILES['userfile']['size'];
        $fileType = $_FILES['userfile']['type'];
        $fileType=(get_magic_quotes_gpc()==0 ? mysql_real_escape_string(
        $_FILES['userfile']['type']) : mysql_real_escape_string(
        stripslashes ($_FILES['userfile'])));
        $fp      = fopen($tmpName, 'r');
        $content = fread($fp, filesize($tmpName));
        $content = addslashes($content);
        fclose($fp);
        if(!get_magic_quotes_gpc())
        {
            $fileName = addslashes($fileName);
        }
        $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
        $db = mysql_select_db('sims', $con);
        if($db){
        $query = "INSERT INTO uploads (name, size, type, content ) ".
        "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
        mysql_query($query) or die('Error, query failed'); 
        mysql_close();
        header('location:../View/Views.php');
        }
        else { 
        echo "upload not successful try again"; 
		echo '<a href=../Upload/UPload.php';  
        }
    } 
?>
