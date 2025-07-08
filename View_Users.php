<html>


<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;"></td>
        <td><a href="?tag=susers_entry"><input type="button" title="Add new account" name="butAdd" value="Add New" id="button-search" /></a></td>
        
    </tr>
</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content-input">
	<form method="post">
    <table border="1" width="805px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Account Type</th>
            <th>New Password</th>
            <th>Confirm Password</th>
            <th>Email</th>
            <th colspan="2">Operation</th>
        </tr>
        
         <?php
		 
		 $key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM users_tbl WHERE AccountType  like '%$key%' ");
	else
        $sql_sel=mysql_query("SELECT * FROM users_tbl");
		
		
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
            <td><?php echo $row['AccountType'];?></td>
            <td><?php echo $row['Password'];?></td>
            <td><?php echo $row['ConfirmPassword'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td align="center"><a href="?tag=susers_entry&opr=upd&rs_id=<?php echo $row['id'];?>" title="Update"><img src="picture/edit.jpg" /></a></td>
            <td align="center"><a href="?tag=view_users&opr=del&rs_id=<?php echo $row['u_id'];?>" title="Delete"><img src="picture/Erase.png" /></a></td>
        </tr>
    <?php	
    }
    ?>
     </table>
   </form>
</div><!-- end of content-input -->
</body>
</html>